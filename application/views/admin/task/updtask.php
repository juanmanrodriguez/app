      <div id="body">
        <ul id="nav">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php">Admin. tareas</a></li>
          <li><a href="index.php?action=managetask">Agregar tarea</a></li>
          <li class="on first"><a href="index.php?action=managetask">Actualizar tarea</a></li>
          <li><a href="index.php?action=managetask">Mostrar tareas</a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Buscar proyecto</h2>
            <form method="POST" action="index.php?action=updproyect" name="forms" id="forms">
              <fieldset>
                <legend>Buscar</legend>
                <p><label for="f1">ID de la tarea:</label><input type="text" name="cedlas" id="cedlas" value="" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="sends" value="Buscar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
