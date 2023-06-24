<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title>Fundación mexicana del corazón</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" type="text/css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap-grid.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap-utilities.min.css">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" type="text/css" /> -->

   <!-- <link rel="manifest" href="manifest.json"> -->
   <link rel="stylesheet" href="<?=base_url('assets/admin/css/inter.css')?>">
   <link rel="stylesheet" href="<?=base_url('assets/admin/css/toast.css')?>">
   <link rel="stylesheet" href="<?=base_url('assets/admin/css/styles.css')?>">
   <meta name="theme-color" content="#ffff">
   <meta name="description" content="Mi web es una Aplicacion Web Progresiva">
   <link rel="icon" type="image/png" href="<?=base_url('assets/admin/img/logo.png')?>">

</head>

<body class="sidebar-mini">
   <header class="navbar">
      <button class="sidebar-toggler" onclick="toggleSidebar()">
         <i class="fas fa-bars"></i>
      </button>
      <button class="navbar-toggler" onclick="toggleNavbar()">
         <i class="fas fa-ellipsis-v"></i>
      </button>
      <a class="navbar-brand" href="#"></a>
      <ul class="navbar-nav">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               Cuenta
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Cerrar sesion</a>
            </div>
         </li>
         <li class="nav-item"><a href="#" class="nav-link">Manual</a></li>
         <li class="nav-item"><a href="#" class="nav-link">Soporte</a></li>
      </ul>
   </header>

   <nav class="sidebar">
      <ul>
         <li>
            <a href="#" class="pd-0" onclick="toggleSidebar()">
               <img src="<?=base_url('assets/admin/img/user.jpg')?>">
               <b><small>Administrador</small><br>Sergio Garcia</b>
            </a>
         </li>
         <li><a href="#"><i class="far fa-home"></i> <span>Inicio</span></a></li>
         <li class="dropdown">
            <a class="dropdown-toggle" href="#" id="sidebarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="far fa-file-alt"></i> <span>Blog</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="sidebarDropdown">
               <a class="dropdown-item" href="<?=base_url('admin/blogs')?>">• Ver todos</a>
               <a class="dropdown-item" href="<?=base_url('admin/blog/post/insert')?>">• Nuevo post</a>
            </div>
         </li>
         <li><a href="#"><i class="far fa-cog"></i> <span>Opciones</span></a></li>
      </ul>
   </nav>

   <main class="main-content">