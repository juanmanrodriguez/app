      <div id="body">
        <ul id="nav">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php">Admin. tareas</a></li>
          <li class="on first"><a href="index.php?action=addtask">Agregar tarea</a></li>
          <li><a href="index.php?action=udptask">Actualizar tarea</a></li>
          <li><a href="index.php?action=tabtask">Mostrar tareas</a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Datos del Proyecto</h2>
            <form method="POST" action="index.php?action=addtask" name="form" id="form">
              <fieldset>
                <legend>Registrar Proyecto</legend>
                <p><label for="f1">Nombre de la tarea:</label><input type="text" name="user" id="user" value="" /></p>
                <p><label for="f3">Estado:</label><input type="text" name="apdo" id="apdo" value="" /></p>
                <p><label for="f2">Proyecto:</label><input type="text" name="nombre" id="nombre" value="" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="send" value="Registrar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
