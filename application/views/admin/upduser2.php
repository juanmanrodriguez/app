      <div id="body">
        <ul id="nav">
          <li class="first"><a href="index.php">Inicio</a></li>
          <li><a href="index.php?action=adduser">Ingresar usuario</a></li>
          <li class="on"><a href="index.php?action=upduser">Actualizar usuario</a></li>
          <li><a href="index.php?action=tabuser">Mostrar usuarios</a></li>
          <li><a href="index.php?action=logout">Salir del sistema <img src="img/network-secure.png"></a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Datos del Usuario</h2>
            <form method="POST" action="index.php?action=upduser" name="form" id="form">
              <fieldset>
                <legend>Registrar</legend>
                <p><label for="f1">ID Usuario:</label><input type="text" name="iduser" id="iduser" value="{iduser}" readonly /></p>
                <p><label for="f2">Usuario:</label><input type="text" name="user" id="user" value="{usuario}" />
                  <input type="hidden" name="userdb" id="userdb" value="{userdb}" />
                </p>
                <p><label for="f3">Nombre:</label><input type="text" name="nombre" id="nombre" value="{nombre}" /></p>
                <p><label for="f4">Apellido:</label><input type="text" name="apdo" id="apdo" value="{apellido}" /></p>
                <p><label for="f5">Cédula:</label><input type="text" name="cedla" id="cedla" value="{cedula}" />
                  <input type="hidden" name="cedladb" id="cedladb" value="{cedladb}" />
                </p>
                <p><label for="f6">Teléfono:</label><input type="text" name="tlf" id="tlf" value="{tlf}" /></p>
                <p><label for="f7">Email:</label><input type="text" name="email" id="email" value="{email}" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="send" value="Actualizar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
