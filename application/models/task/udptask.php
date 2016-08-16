<?php
$message = false;
/* Datos enviados */
if (isset($_POST['sends'])) {
    /* Comprobamos si la cédula existe */
    $Query = ('SELECT * FROM tarea WHERE ID_PROY=\''.$_POST['cedlas'].'\'');
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
    $SQL = ('UPDATE tarea SET
                estado=\'' . $_POST['email'] . '\'
            WHERE ID_TAREA=\'' . $_POST['iduser'] . '\'');
    $Result = mysqli_query($conn, $SQL);
    if (!$Result) {
        exit(mysqli_errno($conn) . ": " . mysqli_error($conn));
    }
    mysqli_close($conn);
    /* Muestro un mensaje */
    $message = ('upduser-m-02');
}
?>
