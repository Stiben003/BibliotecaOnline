
<body>
<div class="d-flex" id="content-wrapper">

<!-- Sidebar -->
<div id="sidebar-container" class="bg-bleu">
    <div class="logo-title m-2">
    <img class="imagen d-inline-block" src="image/logo2.png" alt="">
        <h3 class="text-white font-weight-bold d-inline-block m-2"> Biblioteca</h3>
    </div>

    <div class="menu">
        <a href="inicio.php" class="d-block text-white p-3 border-0"><i class="icon ion-md-home lead mr-2"></i>
            Inicio</a>

        <a href="#" class="d-block text-white p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
            Usuarios</a>

        <a href="catalogo.php" class="d-block text-white p-3 border-0"><i class="icon ion-md-book lead mr-2"></i>
            Catalogo</a>
        <a href="#" class="d-block text-white p-3 border-0"> <i class="icon ion-md-create lead mr-2"></i>
            Registro</a>
        <a href="#" class="d-block text-white p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
            Reportes</a>
    </div>
</div>
<!-- Fin sidebar -->

<div class="w-100">

 <!-- Navbar -->
 <nav class="navbar navbar-expand navbar-dark naverr border-bottom py-2">
    <div class="container">
    <button id="sidebarCollapse" class="bg-bleu"><span class="navbar-toggler-icon"></span></button>
      <div class="sidebar-hidden">
      <img class="imagene img-fluid d-inline-block" src="image/logo2.png" alt="">
      <h4 class="text-white font-weight-bold d-inline-block mb-0"> Biblioteca</h4>
      </div>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Usuario
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Mi perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="cerrar.php">Cerrar sesión</a>
            </div>
          </li>
        </ul>
    </div>
  </nav>
  <!-- Fin Navbar -->