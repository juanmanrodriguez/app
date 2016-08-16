      <div id="body">
        <ul id="nav">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php">Admin. proyectos</a></li>
          <li class="on first"><a href="index.php?action=addproyect">Agregar proyecto</a></li>
          <li><a href="index.php?action=manageproyect">Actualizar proyecto</a></li>
          <li><a href="index.php?action=tabproyect">Mostrar proyectos</a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Datos del Proyecto</h2>
            <form method="POST" action="index.php?action=adduser" name="form" id="form">
              <fieldset>
                <legend>Registrar Proyecto</legend>
                <p><label for="f1">Nombre del proyecto:</label><input type="text" name="user" id="user" value="" /></p>
                <p><label for="f2">Pariticipante:</label><input type="text" name="nombre" id="nombre" value="" /></p>
                <p><label for="f3">Estado:</label><input type="text" name="apdo" id="apdo" value="" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="send" value="Registrar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
