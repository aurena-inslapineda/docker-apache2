<?php

include_once __DIR__ . "/../Functions/functions_view.php";


if(isset($_POST["mostrarCompte"])) {
    mostrarHeaders("Tratando");
}
else {
    mostrarHeaders("Tratando", "redirect");
}


print "<h1>Tratando</h1>";
/*
 * Necesito saber si en una array de objetos existe ya un objeto con el DNI que vamos a introducir
 *
 */
if (isset($_POST["newClient"])) {
    print "<h2>Cliente</h2>";
    tratarClientes();
}
if (isset($_POST["newCompte"])) {
    print "<h2>Cuenta</h2>";
    tratarComptes();
}
if (isset($_POST["editIngreso"])) {
    print "<h2>Ingreso</h2>";
    tratarIngresos();
}
if (isset($_POST["editExtracto"])) {
    print "<h2>Extracto</h2>";
    tratarExtractos();
}
if (isset($_POST["mostrarCompte"])) {
    print "<h2>Mostrar</h2>";
    mostrarComptes();
}

mostrarBotonMenu();
mostrarFooter();