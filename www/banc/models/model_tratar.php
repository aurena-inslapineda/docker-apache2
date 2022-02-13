<?php

function tratarClientes() {
    // Variable temporal
    $ClientDNI = strtoupper($_POST['newClientDNI']);
    $ClientNom = ucwords($_POST['newClientNom']);
    $ClientCognom = ucwords($_POST['newClientCognom']);
    $ClientDireccio = ucfirst($_POST['newClientDireccio']);

    /**
     * string $_POST["newClientEdat"]);
     */
    $tempClient = new Client(
        $ClientDNI,
        $ClientNom,
        $ClientCognom,
        $ClientDireccio,
        $_POST['newClientEdat']
    );
    if (!array_key_exists($ClientDNI, $_SESSION['clients'])) {
        // Cargar cliente en la array de sesion
        $_SESSION['clients'][$ClientDNI] = $tempClient;
        echo "<p>Cliente cargado correctamente</p>";
    }
    else {
        echo "<p>El cliente ya existe</p>";
    }
}

function tratarComptes() {
    // Variable temporal
    $CompteNum = strtoupper($_POST["newCompteNum"]);
    $CompteDNI = strtoupper($_POST["newCompteDNI"]);
    $CompteSaldo = floatval($_POST["newCompteSaldo"]);



    // Comprobar que el dni existe
    if (!array_key_exists(strtoupper($CompteDNI), $_SESSION['clients'])) {
        print "<p>No se ha podido crear la cuenta, porque el DNI introducido no coincide con ningun cliente</p>";
    }
    else {
        $tempCompte = new CompteCorrent(
            $CompteNum,
            $CompteSaldo,
            $_SESSION['clients'][$CompteDNI]
        );

        if (CompteCorrent::comprobar($CompteNum, $_SESSION['comptes'])) {
            print "<p>El cliente ya tiene un compte</p>";
        }
        elseif (!array_key_exists($CompteNum, $_SESSION['comptes'])) {
            // Cargar cliente en la array de sesion
            $_SESSION['comptes'][$CompteNum] = $tempCompte;
            echo "<p>Compte cargado correctamente</p>";
        }
        else {
            echo "<p>El compte ya existe</p>";
        }
    }
}

function tratarIngresos() {
    $IngresoNum = strtoupper($_POST["editIngresoNum"]);
    $IngresoSaldo = floatval($_POST["editIngresoSaldo"]);

    // Comprobar que la cuenta existe
    if (!array_key_exists($IngresoNum, $_SESSION['comptes'])) {
        print "<p>No se ha podido crear el ingreso, porque el numero de cuenta introducido no coincide con ningun compte</p>";
    }
    else {
        print "<p>" . $_SESSION['comptes'][$IngresoNum]->ingresarDiners($IngresoSaldo) . "</p>";
    }
}

function tratarExtractos() {
    $ExtractoNum = strtoupper($_POST["editExtractoNum"]);
    $ExtractoSaldo = floatval($_POST["editExtractoSaldo"]);

    // Comprobar que la cuenta existe
    if (!array_key_exists($ExtractoNum, $_SESSION['comptes'])) {
        print "<p>No se ha podido crear el retiro, porque el numero de cuenta introducido no coincide con ningun compte</p>";
    }
    else {
        print "<p>" . $_SESSION['comptes'][$ExtractoNum]->retirarDiners($ExtractoSaldo) . "</p>";
    }
}

function mostrarComptes() {
    $compteNum = strtoupper($_POST["mostrarCompteNum"]);


    if (!array_key_exists($compteNum, $_SESSION['comptes'])) {
        print "<p>No se ha podido mostrar la cuenta, porque el numero introducido no coincide con ningun compte</p>";
    }
    else {
        $compte = $_SESSION['comptes'][$compteNum];
        print "<table class='table table-bordered'>";
        print "<tr><th>Num compte</th><td>" . $compte->getNumCompte() . "</td></tr>";
        print "<tr><th>Nom y cognom</th><td>" . $compte->getClient()->getNom() . " ". $compte->getClient()->getCognoms() . "</td></tr>";
        print "<tr><th>Saldo</th><td>" . $compte->getSaldo() . "</td></tr>";
        print "<tr><th>Edat</th><td>" . $compte->getClient()->getEdat() . "</td></tr>";
        print "<tr><th>Direccio</th><td>" . $compte->getClient()->getDireccio() . "</td></tr>";
        print "</table>";
    }
}