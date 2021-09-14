<?php
/* Smarty version 3.1.39, created on 2021-09-14 11:14:40
  from 'C:\xampp\htdocs\Writer\templates\header-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61406800115a71_13968997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94b6465d2c507fcd5484ba139e5ce89f8af37be4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\header-admin.tpl',
      1 => 1631610879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61406800115a71_13968997 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./templates/vendors/feather/feather.css">
    <link rel="shortcut icon" type="image/x-icon" href="./templates/img/favicon.ico">

    <link rel="stylesheet" href="./templates/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./templates/vendors/css/vendor.bundle.base.css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="./templates/vendors/feather/feather.css">
    <link rel="stylesheet" href="./templates/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./templates/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./templates/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./templates/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="./templates/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./templates/js/select.dataTables.min.css">
    <?php echo '<script'; ?>
 src="./templates/vendors/js/vendor.bundle.base.js"><?php echo '</script'; ?>
>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <?php echo '<script'; ?>
 src="./templates/vendors/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/vendors/datatables.net/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/vendors/datatables.net-bs4/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/js/dataTables.select.min.js"><?php echo '</script'; ?>
>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php echo '<script'; ?>
 src="./templates/js/off-canvas.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/js/hoverable-collapse.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/js/template.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/js/settings.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/js/todolist.js"><?php echo '</script'; ?>
>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <?php echo '<script'; ?>
 src="./templates/js/dashboard.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./templates/js/Chart.roundedBarCharts.js"><?php echo '</script'; ?>
>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./templates/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="./templates/img/logo.png" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>

    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="Dashboard.php">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="icon-book menu-icon"></i>
                        <span class="menu-title">Sezione libri</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="All-product.php">Gestisci libri</a></li>
                        </ul>
                    </div>
                </li>
                <form id="form" action="Logout.php" method="post">
                    <a href="#" class="nav-link"  onclick="document.getElementById('form').submit()">
                    <i class="icon-arrow-right menu-icon"></i>
                        <span class="menu-title">Logout</span>
                    </a>
                </form>
            </ul>
        </nav><?php }
}
