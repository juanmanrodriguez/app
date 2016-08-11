      <div id="body">
        <ul id="nav">
          <li class="first"><a href="index.php">Inicio</a></li>
          <li class="on"><a href="index.php?action=adduser">Registrar Usuario</a></li>
          <li><a href="index.php?action=upduser">Actualizar</a></li>
          <li><a href="index.php?action=tabuser">Tabla Usuario</a></li>
          <li><a href="index.php?action=logout">Logout <img src="img/network-secure.png"></a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Datos del Usuario</h2>
            <form method="POST" action="index.php?action=adduser" name="form" id="form">
              <fieldset>
                <legend>Registrar</legend>
                <p><label for="f1">Usuario:</label><input type="text" name="user" id="user" value="" /></p>
                <p><label for="f2">Nombre:</label><input type="text" name="nombre" id="nombre" value="" /></p>
                <p><label for="f3">Apellido:</label><input type="text" name="apdo" id="apdo" value="" /></p>
                <p><label for="f4">Cédula:</label><input type="text" name="cedla" id="cedla" value="" /></p>
                <p><label for="f5">Teléfono:</label><input type="text" name="tlf" id="tlf" value="" /></p>
                <p><label for="f6">Email:</label><input type="text" name="email" id="email" value="" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="send" value="Registrar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
