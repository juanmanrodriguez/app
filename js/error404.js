/* Determinamos el tiempo total en segundos */
var totalTiempo = 5;

/* Determinamos la url donde redireccionar */
var url = "index.php";

function updateReloj() {
    document.getElementById('CuentaAtras').innerHTML = "Redireccionando en "+totalTiempo+" segundos";
    if (totalTiempo == 0) {
        window.location = url;
    } else {
        /* Restamos un segundo al tiempo restante */
        totalTiempo -= 1;
        /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
        setTimeout("updateReloj()",1000);
    }
}
window.onload = updateReloj;
