<?php
/* Se inicia la sesión */
session_start();
/* Se selecciona uno u otro según sea el caso */
if (empty($_SESSION['k_username'])) {
    /* de entrada al sistema, sin inicio de sesión */
    include('application/controllers/controller.php');
} elseif (!empty($_SESSION['k_username'])) {
    /* luego de iniciar la sesión */
    include('application/controllers/controller2.php');
}
?>
