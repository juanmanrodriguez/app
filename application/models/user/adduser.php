<?php
$message = false;
/* Datos enviados */
if (isset($_POST['send'])) {
    /* Comprobamos si el nombre de usuario existe */
    $Query = ('SELECT Usuario
                FROM usuario
            WHERE Usuario=\''.$_POST['user'].'\'');
    $result = mysqli_query($conn, $Query);
    if (!$result) {
        exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
    }
    $user_exist = mysqli_num_rows($result);
    /* Comprobamos si la cédula existe */
    $Query = ('SELECT Cedula
                FROM usuario
            WHERE Cedula=\''.$_POST['cedla'].'\'');
    $result = mysqli_query($conn, $Query);
    if (!$result) {
        exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
    }
    $cedla_exist = mysqli_num_rows($result);
    /* Validamos el usuario */
    if ($user_exist) {
        /* Muestro un mensaje */
        $message = ('adduser-m-01');
    /* Validamos la cédula */
    } elseif ($cedla_exist) {
        /* Muestro un mensaje */
        $message = ('adduser-m-02');
    } else {
        /* Se guarda el Usuario */
        $SQL = ('INSERT INTO usuario (
                    Usuario,
                    Nombre,
                    Apellido,
                    Cedula,
                    Tlf,
                    Email
                ) VALUES (
                    \''.$_POST['user'].'\',
                    \''.$_POST['nombre'].'\',
                    \''.$_POST['apdo'].'\',
                    \''.$_POST['cedla'].'\',
                    \''.$_POST['tlf'].'\',
                    \''.$_POST['email'].'\')');
        $Result = mysqli_query($conn, $SQL);
        if (!$Result) {
            exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
        }
        mysqli_close($conn);
        /* Muestro un mensaje */
        $message = ('adduser-m-03');
    }
}
?>
