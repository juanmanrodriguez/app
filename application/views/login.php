<div id="body">
    <ul id="nav">
        <li class="first"><a href="index.php">Inicio</a></li>
        <li class="on"><a href="index.php?action=login">Entrar al sistema <img src="img/network-error.png"></a></li>
    </ul>
    <div id="content">
        <div>
            <h2>Inicio de sesi&oacute;n</h2>
            <form method="POST" action="index.php?action=login" name="form" id="form">
                <fieldset>
                    <legend>Inicio de sesi&oacute;n</legend>
                    <p><label for="f1">Usuario:</label><input type="text" name="admin" id="admin" value="" /></p>
                    <p><label for="f2">Contrase&ntilde;a:</label><input type="password" name="passw" id="passw" value="" /></p>
                    <p></p>
                    <p align="center">
                        <input type="submit" name="send" value="Acceder" class="btn" />
                        <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                    </p>
                </fieldset>
            </form>
