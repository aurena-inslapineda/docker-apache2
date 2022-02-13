<?php
include_once __DIR__ . "/../Functions/functions_view.php";

mostrarHeaders("Menu Banc");
?>
    <div class="mx-4 my-4 w-50">
        <h1>Banc La pineda</h1>
        <div class="list-group w-50">
            <a class="list-group-item list-group-item-action" href="newclient">Nou client</a>
            <a class="list-group-item list-group-item-action" href="newcompte">Nou compte bancari</a>
            <a class="list-group-item list-group-item-action" href="ingressar">Ingresar diners</a>
            <a class="list-group-item list-group-item-action" href="retirar">Retirar diners</a>
            <a class="list-group-item list-group-item-action" href="veure">Veure dades i saldo</a>
            <a class="list-group-item list-group-item-action" href="destroy">Destroy Sesion</a>
        </div>
    </div>
<?php
mostrarFooter();