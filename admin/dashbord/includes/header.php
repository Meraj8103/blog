<?php 
include "includes/res.php";
include "includes/config.php";
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

<!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
  
<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
 <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


<!-- editor -->
   <link rel="stylesheet" href="../froala_assets/css/froala.css"> 

<link rel="stylesheet" href="../assets/plugins/fileuploads/css/fileupload.css">

<!--Material Design Iconic Font-->
<link rel="stylesheet" href="material-design/css/material-design-iconic-font.min.css">

<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Hind|Oxygen" rel="stylesheet">
<!--jQuery-->
<script src="../assets/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<!--Navigation Start-->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn-sm btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block mr-auto">
        <a href="../logout.php" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light"><center>ADMIN PANLE</center></span>
    </a> -->
    <br>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/image/bootstrap.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Birdlights</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DASHBORD
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                POSTS
                <i class="fas fa-angle-left right"></i>
                <?php 
                $sql="SELECT * FROM category " or die("sql faild.");
                $result=$conn->query($sql);
                
                 ?>
                 <span class="badge badge-info right"><?php echo $result->num_rows; ?></span> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-post.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD NEW POST</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="post.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW ALL POST</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                CATEGORY
                <i class="fas fa-angle-left right"></i>
                <?php 
                $sql1="SELECT * FROM category " or die("sql faild.");
                $result1=$conn->query($sql1);
                
                 ?>
                <span class="badge badge-info right"><?php echo $result1->num_rows; ?></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-menu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD NEW CATEGORY</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-sub-menu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADD SUB CATEGORY</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-menu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW CATEGORY</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-submenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VIEW SUB CATEGORY</p>
                </a>
              </li>
            </ul>
          </li>

  

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                MAILBOX
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

