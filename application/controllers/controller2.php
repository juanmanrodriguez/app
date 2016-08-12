<?php
/* error_reporting(0); */
if (empty($_GET['action'])) {
    /* Vista de entrada al sistema Administrador */
    vista_header();
    include('application/views/admin/default.php');
    vista_footer();
} else {
    require('application/libraries/db_connect.php');
    switch ($_GET['action']) {
        /* Registrar Usuario */
        case 'adduser':
            include('application/models/adduser.php');
            vista_header('Administrador | Registrar Usuario');
            include('application/views/admin/adduser.php');
            vista_footer();
            include('application/models/messages.php');
        break;
        /* Actualizar Usuario */
        case 'upduser':
            include('application/models/upduser.php');
            vista_header('Administrador | Actualizar Usuario');
            if (empty($Row)) {
                include('application/views/admin/upduser.php');
            } else {
                $form = file_get_contents('application/views/admin/upduser2.php');
                $form = str_replace('{iduser}', $Row['ID_USER'], $form);
                $form = str_replace('{userdb}', $Row['Usuario'], $form);
                $form = str_replace('{cedladb}', $Row['Cedula'], $form);
                $form = str_replace('{usuario}', $Row['Usuario'], $form);
                $form = str_replace('{nombre}', $Row['Nombre'], $form);
                $form = str_replace('{apellido}', $Row['Apellido'], $form);
                $form = str_replace('{cedula}', $Row['Cedula'], $form);
                $form = str_replace('{tlf}', $Row['Tlf'], $form);
                $form = str_replace('{email}', $Row['Email'], $form);
                echo $form;
            }
            vista_footer();
            include('application/models/messages.php');
        break;
        /* Tabla Usuario */
        case 'tabuser':
            include('application/models/tabuser.php');
            vista_header('Administrador | Tabla Usuario');
            include('application/views/admin/tabuser.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Tabla Proyecto */
        case 'tabproyect':
            include('application/models/tabproyect.php');
            vista_header('Administrador | Tabla Proyecto');
            include('application/views/admin/tabproyect.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Logout Administrador */
        case 'logout':
            vista_header();
            include('application/models/logout.php');
            vista_footer();
        break;
        /* Si la página no existe */
        default:
            vista_header('ERROR 404');
            include('application/views/admin/error_404.php');
            vista_footer();
            echo '<script type="text/javascript" src="js/error404.js"></script>';
    }
}
/* Función para generar el header */
function vista_header($titulo = 'Inicio | Administrador') {
    $header = file_get_contents('application/views/admin/header.php');
    $header = str_replace('{titulo}', $titulo, $header);

    echo $header;
}
/* Función para generar el footer */
function vista_footer() {
    $footer = file_get_contents('application/views/admin/footer.php');

    echo $footer;
}
?>
