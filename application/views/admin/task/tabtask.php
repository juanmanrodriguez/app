      <div id="body">
        <ul id="nav">
          <li class="on first"><a href="index.php">Inicio</a></li>
          <li><a href="index.php?action=adduser">Ingresar usuario</a></li>
          <li><a href="index.php?action=upduser">Actualizar usuario</a></li>
          <li><a href="index.php?action=tabuser">Mostrar usuarios</a></li>
          <li><a href="index.php?action=logout">Salir del sistema<img src="img/network-secure.png"></a></li>
          
          <li><a href="index.php?action=manageproyect">Admin. proyectos</a></li>
          <li class="on"><a href="index.php?action=managetask">Admin. tareas</a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Tabla de tareas registrados</h2>
            <p>Tareas que se encuentran registrados en la aplicaci&oacute;n</p>
            <?php if (!empty($Row)) { ?>
            <table>
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre de la tarea</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Identificador del proyecto</th>
                </tr>
              </thead>
              <?php do { ++ $total; ?>
              <tbody>
                <tr>
                  <td><?php echo $Row['ID_TAREA']; ?></td>
                  <td><?php echo $Row['nombre']; ?></td>
                  <td><?php echo $Row['estado']; ?></td>
                  <td><?php echo $Row['id_proyecto']; ?></td>
                </tr>
              </tbody>
              <?php } while ($Row = mysqli_fetch_assoc($Result)); ?>
            </table>
            <p><strong>Total de proyectos registrados: <?php echo $total; ?></strong></p>
            <?php } ?>