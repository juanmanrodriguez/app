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
            <h2>Buscar Usuario</h2>
            <form method="POST" action="index.php?action=upduser" name="forms" id="forms">
              <fieldset>
                <legend>Buscar</legend>
                <p><label for="f1">Cédula:</label><input type="text" name="cedlas" id="cedlas" value="" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="sends" value="Buscar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
