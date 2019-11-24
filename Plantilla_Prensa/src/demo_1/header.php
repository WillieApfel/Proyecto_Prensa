<?php
include ('connect.php');
include '..\..\..\functions_forms.php';
include "pages/Login/Codigo/headersession.php";
mysqli_set_charset($connect, "utf8");

?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prensa del Navegantes del Magallanes BBC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin ckeditor for this page -->
    <script src="ckeditor/ckeditor.js"></script>
    <script src="main.js"></script>
    <script src="main2.js"></script>
    
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="inicio.php">
            <img src="../assets/images/logo.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="inicio.php">
            <img src="../assets/images/logo-mini.ico" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                 <!-- <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>  --> Cuenta 
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a href="sesion_logout.php" class="dropdown-item">Cerrar sesión<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav  class="sidebar sidebar-offcanvas" id="sidebar">
             <br>
             <br>
        <ul style="position:fixed; width: 268px" class="nav">
            <li class="nav-item nav-category">Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Inicio</span>
              </a>
            </li>
            
            <div class="nav-item">
              <a class="nav-link" data-toggle="collapse" type="selector" href="#ui-basic1" aria-expanded="false" aria-controls="#ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">PDF</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="juegos.php">Redactar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reportes.php">Listado</a>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="nav-item">
              <a class="nav-link" data-toggle="collapse" type="selector" href="#ui-basic" aria-expanded="false" aria-controls="selector">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Partidos</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                     <li class="nav-item">
                    <a class="nav-link" href="calendariolvbp.php">Enfrentamientos</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="partidoslvbp.php">Calendario</a>
                  </li>
                 
                </ul>
              </div>
            </div>

            
               <div class="nav-item">
              <a class="nav-link" data-toggle="collapse" type="selector" href="#ui-basic2" aria-expanded="false" aria-controls="selector">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Equipo</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="roster.php">Roster General</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="roster_sem.php">Roster Semanal</a>
                  </li>
              </div>
            </div>
          
             <li class="nav-item">
           <!--   <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>  -->
            </li>
          </ul>
        </nav> 
   
       <!--  partial -->
      
