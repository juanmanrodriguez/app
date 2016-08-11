<?php
/* error_reporting(0); */
if (empty($_GET['action'])) { # si get_action está vacío.
    /* Vista de entrada al sistema */
    vista_header(); # header.
    include('application/views/default.php'); # página de entrada (vista).
    vista_footer(); # footer.
} else { # si get_action trae algún valor (login).
    require('application/libraries/db_connect.php'); # conexión a la DB.
    switch ($_GET['action']) {
    /* Administrador Login */
    case 'login':
        include('application/models/login.php'); # modelo.
        vista_header('GraniteGlass | Login'); # header.
        include('application/views/login.php'); # página de login (vista).
        vista_footer(); # footer.
        include('application/models/messages.php'); # mensajes.
    break;
    /* Si la página no existe */
    default: # si se escribe algo diferente a (login).
        vista_header('ERROR 404');
        include('application/views/error_404.php');
        vista_footer();
        echo '<script type="text/javascript" src="js/error404.js"></script>';
    }
}
/* Función para generar el header */
function vista_header($titulo = 'GraniteGlass | Inicio') {
    $header = file_get_contents('application/views/header.php');
    $header = str_replace('{titulo}', $titulo, $header);

    echo $header;
}
/* Función para generar el footer */
function vista_footer() {
    $footer = file_get_contents('application/views/footer.php');

    echo $footer;
}
?>
