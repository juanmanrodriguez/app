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
            <h2>Datos del proyecto</h2>
            <form method="POST" action="index.php?action=updproyect" name="form" id="form">
              <fieldset>
                <legend>Registrar</legend>
                <p><label for="f1">ID de la tarea:</label><input type="text" name="iduser" id="iduser" value="{iduser}" readonly /></p>
                <p><label for="f2">Nombre de la tarea:</label><input type="text" name="user" id="user" value="{user}" />
                  <input type="hidden" name="userdb" id="userdb" value="{userdb}" />
                </p>
                <p><label for="f7">Estado:</label><input type="text" name="email" id="email" value="{email}" /></p>
                <p></p>
                <p align="center">
                  <input type="submit" name="send" value="Actualizar" class="btn" />
                  <input type="button" value="Cancelar" class="btn" onClick="history.back()" />
                </p>
              </fieldset>
            </form>
