<?php
/* error_reporting(0); */
if (empty($_GET['action'])) {
    /* Vista de entrada al sistema Administrador */
    vista_header();
    include('system/view/admin/default.php');
    vista_footer();
} else {
    require('lib/db_connect.php');
    switch ($_GET['action']) {
        /* Registrar Usuario */
        case 'adduser':
            include('system/model/adduser.php');
            vista_header('Administrador | Registrar Usuario');
            include('system/view/admin/adduser.php');
            vista_footer();
            include('system/model/messages.php');
        break;
        /* Actualizar Usuario */
        case 'upduser':
            include('system/model/upduser.php');
            vista_header('Administrador | Actualizar Usuario');
            if (empty($Row)) {
                include('system/view/admin/upduser.php');
            } else {
                $form = file_get_contents('system/view/admin/upduser2.php');
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
            include('system/model/messages.php');
        break;
        /* Tabla Usuario */
        case 'tabuser':
            include('system/model/tabuser.php');
            vista_header('Administrador | Tabla Usuario');
            include('system/view/admin/tabuser.php');
            vista_footer();
            include('system/model/messages.php');
        break;
        /* Logout Administrador */
        case 'logout':
            vista_header();
            include('system/model/logout.php');
            vista_footer();
        break;
        /* Si la página no existe */
        default:
            vista_header('ERROR 404');
            include('system/view/admin/error_404.php');
            vista_footer();
            echo '<script type="text/javascript" src="js/error404.js"></script>';
    }
}
/* Función para generar el header */
function vista_header($titulo = 'Inicio | Administrador') {
    $header = file_get_contents('system/view/admin/header.php');
    $header = str_replace('{titulo}', $titulo, $header);

    echo $header;
}
/* Función para generar el footer */
function vista_footer() {
    $footer = file_get_contents('system/view/admin/footer.php');

    echo $footer;
}
?>
