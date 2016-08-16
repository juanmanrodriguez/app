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
            include('application/models/user/adduser.php');
            vista_header('Administrador | Registrar Usuario');
            include('application/views/admin/user/adduser.php');
            vista_footer();
            include('application/models/messages.php');
        break;
        /* Actualizar Usuario */
        case 'upduser':
            include('application/models/user/upduser.php');
            vista_header('Administrador | Actualizar Usuario');
            if (empty($Row)) {
                include('application/views/admin/user/upduser.php');
            } else {
                $form = file_get_contents('application/views/admin/user/upduser2.php');
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
            include('application/models/user/tabuser.php');
            vista_header('Administrador | Tabla Usuario');
            include('application/views/admin/user/tabuser.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Logout Administrador */
        case 'logout':
            vista_header();
            include('application/models/logout.php');
            vista_footer();
        break;

        /* Tabla Proyecto */
        case 'tabproyect':
            include('application/models/proyect/tabproyect.php');
            vista_header('Administrador | Tabla Proyecto');
            include('application/views/admin/proyect/tabproyect.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Administrar Proyecto */
        case 'manageproyect':
            vista_header('Administrador | Administrar Proyecto');
            include('application/views/admin/proyect/manageproyect.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Registrar Proyecto */
        case 'addproyect':
            include('application/models/proyect/addproyect.php');
            vista_header('Administrador | Registrar Proyecto');
            include('application/views/admin/proyect/addproyect.php');
            vista_footer();
            include('application/models/messages.php');
        break;
        /* Actualizar Proyecto */
        case 'updproyect':
            include('application/models/proyect/updproyect.php');
            vista_header('Administrador | Actualizar Usuario');
            if (empty($Row)) {
                include('application/views/admin/proyect/updproyect.php');
            } else {
                $form = file_get_contents('application/views/admin/proyect/updproyect2.php');
                $form = str_replace('{iduser}', $Row['ID_PROY'], $form);
                $form = str_replace('{user}', $Row['nombre'], $form);
                $form = str_replace('{email}', $Row['estado'], $form);
                echo $form;
            }
            vista_footer();
            include('application/models/messages.php');
        break;
        
        /* Tabla Tarea */
        case 'tabtask':
            include('application/models/task/tabtask.php');
            vista_header('Administrador | Tabla Tarea');
            include('application/views/admin/task/tabtask.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Administrar Tarea */
        case 'managetask':
            vista_header('Administrador | Administrar Tarea');
            include('application/views/admin/task/managetask.php');
            vista_footer();
            include('application/models/messages.php');
            break;
        /* Registrar Tarea */
        case 'addproyect':
            include('application/models/task/addtask.php');
            vista_header('Administrador | Registrar Proyecto');
            include('application/views/admin/task/addtask.php');
            vista_footer();
            include('application/models/messages.php');
        break;
        /* Actualizar Tarea */
        case 'updproyect':
            include('application/models/task/updtask.php');
            vista_header('Administrador | Actualizar Usuario');
            if (empty($Row)) {
                include('application/views/admin/task/updtask.php');
            } else {
                $form = file_get_contents('application/views/admin/task/updtask2.php');
                $form = str_replace('{iduser}', $Row['ID_PROY'], $form);
                $form = str_replace('{user}', $Row['nombre'], $form);
                $form = str_replace('{email}', $Row['estado'], $form);
                echo $form;
            }
            vista_footer();
            include('application/models/messages.php');
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
