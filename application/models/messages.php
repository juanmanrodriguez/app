<?php
/* Mensajes Registrar Usuario */
if (strcmp($message, 'adduser-m-01') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
            El nombre de usuario no está disponible', { show:'slideDown' });
</script><?php
}

if (strcmp($message, 'adduser-m-02') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
            La cédula ya está registrada', { show:'slideDown' });
</script><?php
}

if (strcmp($message, 'adduser-m-03') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
            Usuario <?php echo "(".$_POST["user"].")"; ?> registrado con exito',
            { show:'slideDown' });
</script><?php
}
/* FIN Mensajes Registrar Usuario */

/* Mensajes Actualizar Usuario */
if (strcmp($message, 'upduser-m-01') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
            La cédula no está registrada', { show:'slideDown' });
</script><?php
}

if (strcmp($message, 'upduser-m-02') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
    Usuario <?php echo "(".$_POST["user"].")"; ?> actualizado correctamente', 
    { show:'slideDown' });
</script><?php
}
/* FIN Mensajes Actualizar Usuario */

/* Mensajes de LOGIN */
if (strcmp($message, 'login-m-01') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
            Usuario no registrado en la Base de Datos', { show:'slideDown' });
</script><?php
}

if (strcmp($message, 'login-m-02') == (0)) {
?><script type="text/javascript">
	$.prompt('<img src="img/important.png"> \
            El Usuario y la Contraseña no coinciden', { show:'slideDown' });
</script><?php
}
/* FIN Mensajes de LOGIN */

/* Mensajes de Tabla Usuario */
if (strcmp($message, 'tabuser-m-01') == (0)) {
?><script type="text/javascript">
function redirect() {
	window.location = "index.php?action=adduser";
}
setTimeout('redirect()', 3000);
	$.prompt('<img src="img/important.png"> \
    No hay usuarios registrados en la Base de Datos',
    { show:'slideDown' });
</script><?php

}
/* FIN Mensajes de Tabla Usuario */
?>
