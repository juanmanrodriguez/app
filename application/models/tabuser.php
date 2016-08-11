<?php
$message = false;
/* Query a la tabla Usuario */
$Query = ('SELECT * FROM usuario');
$Result = mysqli_query($conn, $Query);
if (!$Result) {
    exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
}
$users_exist = mysqli_num_rows($Result);
/* Validamos si existen usuarios registrados */
if (!$users_exist) {
    /* Muestro un mensaje */
    $message = ('tabuser-m-01');
} else {
    $total = 0;
    $Row = mysqli_fetch_assoc($Result);
}
