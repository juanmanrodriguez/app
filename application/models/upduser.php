<?php
$message = false;
/* Datos enviados */
if (isset($_POST['sends'])) {
    /* Comprobamos si la cédula existe */
    $Query = ('SELECT * FROM Usuario WHERE Cedula=\''.$_POST['cedlas'].'\'');
    $Result = mysqli_query($conn, $Query);
    if (!$Result) {
        exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
    }
    $cedlas_exist = mysqli_num_rows($Result);
    /* Validamos la cédula */
    if (!$cedlas_exist) {
        /* Muestro un mensaje */
        $message = ('upduser-m-01');
    } else {
        $Row = mysqli_fetch_assoc($Result);
    }
}

/* Datos enviados */
if (isset($_POST['send'])) {
    /* Compruebo si el nombre de usuario cambió */
    if (($_POST['userdb']) != ($_POST['user'])) {
        $Query = ('SELECT Usuario
                    FROM Usuario
                WHERE Usuario=\''.$_POST['user'].'\'');
        $Result = mysqli_query($conn, $Query);
        if (!$Result) {
            exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
        }
        $user_exist = mysqli_num_rows($Result);
        /* Validamos el usuario */
        if ($user_exist) {
            /* Muestro un mensaje */
            $message = ('adduser-m-01');
         }
    } else { $user_exist = false; } /* variable para poder actualizar */
    /* Compruebo si la cédula cambió */
    if (($_POST['cedladb']) != ($_POST['cedla'])) {
        $Query = ('SELECT Cedula
                    FROM Usuario
                WHERE Cedula=\''.$_POST['cedla'].'\'');
        $Result = mysqli_query($conn, $Query);
        if (!$Result) {
            exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
        }
        $cedla_exist = mysqli_num_rows($Result);
        /* Validamos la cédula */
        if ($cedla_exist) {
            /* Muestro un mensaje */
            $message = ('adduser-m-02');
        }
    } else { $cedla_exist = false; } /* variable para poder actualizar */
    /* Si las validaciones anteriores son false; se actualiza el Usuario */ 
    if ((empty($user_exist)) && (empty($cedla_exist))) {
        $SQL = ('UPDATE Usuario SET
                Usuario=\''.$_POST['user'].'\',
                Nombre=\''.$_POST['nombre'].'\',
                Apellido=\''.$_POST['apdo'].'\',
                Cedula=\''.$_POST['cedla'].'\',
                Tlf=\''.$_POST['tlf'].'\',
                Email=\''.$_POST['email'].'\'
            WHERE ID_USER=\''.$_POST['iduser'].'\'');
        $Result = mysqli_query($conn, $SQL);
        if (!$Result) {
            exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
        }
        mysqli_close($conn);
        /* Muestro un mensaje */
        $message = ('upduser-m-02');
    }
}
?>
