<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./css/style.min.css"> -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon document" aria-hidden="true"></span>Productos</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon folder" aria-hidden="true"></span>Fabricantes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Clientes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon paper" aria-hidden="true"></span>Certificados</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Peticiones de <br> Cambio </a>
                </li>
            </ul>
                    <ul class="cat-sub-menu">
                    </ul>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="icon setting">
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__subtitle">Log out</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
    <div class="container my-5">
    <div class="w-100 d-flex alig-items-center justify-content-between mb-4 ">
        <h2 class="text-center">Lista de Fabricantes</h2>
        <a href="Programas/IngresarFabricantes.php" class="btn btn-success">Registrar Fabricantes</a>
    </div>
    <?php
    include 'Programas/conexionDB.php';

    $sql = "SELECT * FROM fabricantes";
    $result = mysqli_query($conexion, $sql);
    $fabricantes = mysqli_fetch_all($result);
?>
<!-- Se crea la tabla para reenderizar fabricantes -->
<table class="table table-striped table-bordered">
    <!-- Se crea el encabezado de la tabla -->
    <thead>
        <!-- Se crea la fila para los encabezados de la tabla -->
        <tr>
            <!-- Se definen los encabezados -->
             <th>Nombre del Fabricante</th>
             <th>Direccion del Fabricante</th>
             <th>Eliminar Fabricante</th>
             <th>Editar Fabricante</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($fabricantes as $fabricante): ?>
            <tr>
                <td><?php echo $fabricante[1]?></td>
                <td><?php echo $fabricante[2]?></td>
                <!-- Boton para eliminar el fabricante -->
                <td class="text-center">
                    <form action="Programas/EliminarFabricantes.php" method="post">
                        <input type="hidden" name="id_fabricante" value=<?php echo $fabricante[0]?>>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>

                <!-- Boton para actualizar el fabricante -->
                <td class="text-center">
                    <form action="FormularioActualizarFabricantes.php" method="post" >
                        <input type="hidden" name="id_fabricante" value=<?php echo $fabricante[0]?>>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>

</div>


<!-- Se cierra la conexion con la base de datos -->
<?mysqli_close($conexion)?>

    </main>

    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">elegant-dashboard.com</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>

</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>