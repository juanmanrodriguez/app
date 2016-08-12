      <div id="body">
        <ul id="nav">
          <li class="first"><a href="index.php">Inicio</a></li>
          <li><a href="index.php?action=adduser">Ingresar usuario</a></li>
          <li><a href="index.php?action=upduser">Actualizar usuario</a></li>
          <li class="on"><a href="index.php?action=tabuser">Mostrar usuarios</a></li>
          <li><a href="index.php?action=logout">Salir del sistema <img src="img/network-secure.png"></a></li>
        </ul>
        <div id="content">
          <div>
            <h2>Tabla de usuarios registrados</h2>
            <p>Datos de los usuarios registrados en el sistema.</p>
            <?php if (!empty($Row)) { ?>
            <table>
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Cédula</th>
                  <th scope="col">Teléfono</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <?php do { ++ $total; ?>
              <tbody>
                <tr>
                  <td><?php echo $Row['ID_USER']; ?></td>
                  <td><?php echo $Row['Usuario']; ?></td>
                  <td><?php echo $Row['Nombre']; ?></td>
                  <td><?php echo $Row['Apellido']; ?></td>
                  <td><?php echo $Row['Cedula']; ?></td>
                  <td><?php echo $Row['Tlf']; ?></td>
                  <td><?php echo $Row['Email']; ?></td>
                </tr>
              </tbody>
              <?php } while ($Row = mysqli_fetch_assoc($Result)); ?>
            </table>
            <p><strong>Total de Usuarios: <?php echo $total; ?></strong></p>
            <?php } ?>
