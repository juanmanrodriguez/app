$(document).ready(function() {
    $("#form").submit(function() {

        var admin = $("#admin");
        var passw = $("#passw");

        if ( (admin.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese su nombre de Administrador', { show:'slideDown' });
            return false;
        }

        if ( (passw.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese la contraseña', { show:'slideDown' });
            return false;
        }
        return true;
    });
});
