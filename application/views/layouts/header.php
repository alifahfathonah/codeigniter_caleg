<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= TITLE_BAR ?></title>

    <link rel="shortcut icon" href="<?= base_url('asset/ci-icon.ico') ?>" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
   <link href="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <a href=""><i class="fa fa-home"></i></a>
               </button>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>
                  
                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_user') ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('asset/img/user.png') ?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </a>
                     </div>
                  </li>

               </ul>
            </nav>
            <!-- End of Topbar -->