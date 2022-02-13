<?php
require_once "autoload.php";

$accio = $_GET['accio'] ?? 'menu';

session_start();

if ( !isset($_SESSION['clients']) ) {
    $_SESSION['clients'] = array();
}
if ( !isset($_SESSION['comptes']) ) {
    $_SESSION['comptes'] = array();
}


switch($accio){
    case 'new_client':
        include __DIR__.'/controllers/controller_client.php';
        break;

    case 'new_compte':
        include __DIR__.'/controllers/controller_compte.php';
        break;

    case 'tratar':
        include __DIR__.'/controllers/controller_tratar.php';
        break;

    case 'ingressar':
        include __DIR__.'/controllers/controller_ingressar.php';
        break;

    case 'retirar':
        include __DIR__.'/controllers/controller_retirar.php';
        break;

    case 'veure':
        include __DIR__.'/controllers/controller_veure.php';
        break;

    /* etc */
    case 'destroy':
        include __DIR__.'/controllers/controller_destroy.php';
        break;
    /* etc */
    case 'menu':
    default:
        include __DIR__.'/controllers/controller_menu.php';
        break;
}