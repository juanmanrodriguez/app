<?php
$message = false;
/* Datos enviados */
if (isset($_POST['send'])) {
    $admin = htmlspecialchars(trim($_POST['admin']));
    $password = trim($_POST['passw']);
    /* Query a Administrador */
    $Query = ('SELECT 
                    Admin, 
                    Password 
                FROM administrador 
                WHERE Admin=\''.$admin.'\'');
    $Result = mysqli_query($conn, $Query);
    if (!$Result) {
        exit (mysqli_errno($conn) . ": " . mysqli_error($conn));
    }
    $admin_exist = mysqli_num_rows($Result);
    $row = mysqli_fetch_assoc($Result);
    /* Validamos el administrador */
    if (!$admin_exist) {
        /* Mensaje de error: (Usuario no registrado en la Base de Datos) */
        $message = ('login-m-01');
    } elseif (!password_verify($password, $row['Password'])) {
        /* Se compara que las contraseñas sean iguales */
        /* Mensaje de error: (El Usuario y la Contraseña no coinciden) */
        $message = ('login-m-02');
    } else {
        $_SESSION['k_username'] = $row['Admin'];
        /* Si son iguales, se envía a la página de administrador */
        header('location: index.php');
    }
}
?>
