$(document).ready(function() {
    $("#forms").submit(function() {

        var cedlas = $("#cedlas");

        if ( (cedlas.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese un número de cédula', { show:'slideDown' });
            return false;
        }
        return true;
    });
});

$(document).ready(function() {
    $("#form").submit(function() {

        var user = $("#user");
        var nombre = $("#nombre");
        var apdo = $("#apdo");
        var cedla = $("#cedla");
        var tlf = $("#tlf");
        var email = $("#email");

        if ( (user.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese un nombre de Usuario', { show:'slideDown' });
            return false;
        }

        if ( (nombre.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese su nombre', { show:'slideDown' });
            return false;
        }

        if ( (apdo.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese su apellido', { show:'slideDown' });
            return false;
        }

        if ( (cedla.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese la cédula', { show:'slideDown' });
            return false;
        }

        if ( (tlf.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese su número de teléfono', { show:'slideDown' });
            return false;
        }

        if ( (email.val().length) == ("") ) {
            $.prompt('<img src="img/important.png"> Ingrese su email', { show:'slideDown' });
            return false;
        }
        return true;
    });
});
