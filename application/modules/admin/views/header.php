<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
 <html>
 <head>
 <base href="./">
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Dapoer Ricka</title>
    <link rel="manifest" href="<?php echo get_theme_uri('assets/favicon/manifest.json');?>">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo get_theme_uri('assets/vendors/simplebar/css/simplebar.css');?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('assets/css/vendors/simplebar.css');?>">
    <!-- Main styles for this application-->
    <link href="<?php echo get_theme_uri('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo get_theme_uri('assets/css/examples.css');?>" rel="stylesheet">
    <link href="<?php echo get_theme_uri('assets/vendors/@coreui/chartjs/css/coreui-chartjs.css');?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-2E9/b2fZ+VJoP6eRIpzzMFkuqbh0qDkIFVLzJJwkESsdKPEwzb0n6E55enZ+Ee8V" crossorigin="anonymous">
    <script src="<?php echo get_theme_uri('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js');?>"></script>

 </head>
 
 <body>
 <div class="sidebar sidebar-show">
  <ul class="sidebar-nav">
  </ul>
</div> 
<div class="sidebar sidebar-dark sidebar-fixed"onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand d-none d-md-flex" width="118" height="46" alt="logo">
            <use xlink:href="assets/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="name logo">
            <use xlink:href="assets/assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" >
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/products/category'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Kategori Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/products'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/orders'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
            </svg> Pesanan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/payments'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> Pembayaran</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/customers'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Pelanggan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/reviews'); ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> Riwayat Pelanggan</a>
        </li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
   
         