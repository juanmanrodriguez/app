<?php
/* Conexión a MySQL */
$db_host = ('localhost');
$db_username = ('root');
$db_password = ('');
$db_name = ('app');
$db_charset = ('UTF8');
$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_connect) {
    exit (mysqli_connect_errno() . ": " . mysqli_connect_error());
}
$db_set_charset = mysqli_set_charset($db_connect, $db_charset);
if (!$db_set_charset) {
    exit (mysqli_errno($db_connect) . ": " . mysqli_error($db_connect));
}
$conn = $db_connect;
?>
