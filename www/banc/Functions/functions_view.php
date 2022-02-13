<?php

/**
 * @param string $titulo
 * @param string $tipo
 * @return void
 */
function mostrarHeaders(string $titulo, string $tipo = 'normal') {
    print ('
    <!doctype html>
<html lang="ca">
<head>
    <title>'. $titulo .'</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">');

    if ($tipo == "normal") {
        print ('
                <link
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                    rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous"
                >');
    }
    if ($tipo == "redirect") {
        print('<meta http-equiv="refresh" content="2; url=menu" />');

    }
    print ('</head><body>');
}

function mostrarBotonMenu() {
    print('<footer class="mx-4 my-4"><a href="menu" class=" btn btn-warning">Menu</a></footer>');
}

function mostrarFooter() {
    print ('</body></html>');
}