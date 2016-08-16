      <div id="body">
        <ul id="nav">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php?action=manageproyect">Admin. proyectos</a></li>
          <li><a href="index.php?action=addproyect">Agregar proyecto</a></li>
          <li><a href="index.php?action=manageproyect">Actualizar proyecto</a></li>
          <li class="on first"><a href="index.php?action=tabproyect">Mostrar proyectos</a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Tabla de proyectos registrados</h2>
            <p>Proyectos que se encuentran registrados en la aplicaci&oacute;n</p>
            <?php if (!empty($Row)) { ?>
            <table>
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre del proyecto</th>
                  <th scope="col">Participantes</th>
                  <th scope="col">Estado del proyecto</th>
                </tr>
              </thead>
              <?php do { ++ $total; ?>
              <tbody>
                <tr>
                  <td><?php echo $Row['ID_PROY']; ?></td>
                  <td><?php echo $Row['nombre']; ?></td>
                  <td><?php echo $Row['id_participante']; ?></td>
                  <td><?php echo $Row['estado']; ?></td>
                </tr>
              </tbody>
              <?php } while ($Row = mysqli_fetch_assoc($Result)); ?>
            </table>
            <p><strong>Total de proyectos registrados: <?php echo $total; ?></strong></p>
            <?php } ?>
