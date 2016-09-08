<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<?php if(isset($output)){ $this->load->view('layout/grocery_layout'); } ?>

<title>Administração</title>
<meta name="description" content="">
<meta name="author" content="">
<!-- Make sure the latest version of IE is used -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<!-- CSS - Setup -->
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/grid.css" rel="stylesheet" type="text/css" />
<!-- CSS - Styles -->
<link href="<?php echo base_url(); ?>css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/forms.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/lists.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/calendar.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/extensions.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/visualize.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">



<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<script src="<?php echo base_url(); ?>js/modernizr-1.5.min.js"></script>
<script>base_url = "<?php echo base_url(); ?>";</script>

</head>

<body class="sidebar-left chart">
<header>
  <div class="header-top tr">
    <p>Olá <strong><?php echo $this->session->userdata('nomeUsuario'); ?></strong> | <a href="<?php echo base_url('login/usuario/logout'); ?>">Logout</a></p>
    </div>
  <div class="header-middle"> 
    <!-- Start Nav -->
    <ul id="nav" class="fr ">
      <!-- Nav - Start Help -->
      <!--<li class="help"><a class="help" href="mailto:suporte@gmail.com?Subject=Suporte">Suporte</a>-->
        
      </li>
      <!-- Nav - End Help --> 
      <!-- Nav - Start Settings -->
      <!--
      <li class="settings"><a class="settings" href="#">Configurações</a>
        <ul>
          <li><a>em construção</a><a href="<?php //echo base_url('config/log') ?>">Logs do Sistema</a></li>
        </ul>
      </li>
    -->
      <!-- Nav - End Settings --> 
     
      <!-- Nav - Start Help -->
      <li class="dashboard"><a class="content" href="<?php echo base_url('comunicados'); ?>">Comunicados</a></li>
      <!-- Nav - End Dashboard -->
    </ul>
    <!-- End Nav --> 
    <!-- Start Logo --> 
    <img id="logo" src="<?php echo base_url('img/logo.png') ?>" width="120" style="background:#FFF;padding:10px;border-radius:10px" /> 
    <!-- End Logo --> 
    <br class="cl" />
  </div>
  
</header>


<div id="page">