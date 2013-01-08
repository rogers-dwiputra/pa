<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" media="screen">
    <style type="text/css">
    @media only screen and (min-width: 1024px) {
    body {
    padding-top: 80px;
    }
    }
    </style>
  </head>
  
  <body>
  <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
    <a class="brand" href="#">Bandung Lifestyle City Directory</a>
    <ul class="nav pull-right" href="#">
      <li><a href="#"><i class="icon-off icon-white"></i>&nbsp;Logout Admin</a></li>
    </ul>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="span12">
      <h2>Administrator Panel</h2>
      <hr>
    </div>
  </div>
<div class="row">
  <!-- Menu list -->
  <div class="span3">
  <ul class="nav nav-pills nav-stacked">
    <li <?php if(isset($menu)){if($menu == 'kategori-event'){ echo 'class="active"'; }} ?> ><a href="<?php echo site_url('admin/kategori_event'); ?>">Kategori Event</a></li>
    <li <?php if(isset($menu)){if($menu == 'kategori-spot'){ echo 'class="active"'; }} ?>><a href="<?php echo site_url('admin/kategori_spot'); ?>">Kategori Spot</a></li>
    <li <?php if(isset($menu)){if($menu == 'events'){ echo 'class="active"'; }} ?>><a href="<?php echo site_url('admin/events'); ?>">Events</a></li>
    <li <?php if(isset($menu)){if($menu == 'spots'){ echo 'class="active"'; }} ?>><a href="<?php echo site_url('admin/spots'); ?>">Spots</a></li>
    <li <?php if(isset($menu)){if($menu == 'apidev'){ echo 'class="active"'; }} ?>><a href="<?php echo site_url('admin/apidev'); ?>">API Developers</a></li>
  </ul>
  </div>
  <!-- End Menu list -->
  <div class="span9">