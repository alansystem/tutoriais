<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">

<title>Administração</title>
<meta name="description" content="">
<meta name="author" content="">
<!-- Make sure the latest version of IE is used -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

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

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<script src="<?php echo base_url(); ?>js/modernizr-1.5.min.js"></script>
</head>

<!--[if IE 7 ]>    <body class="ie7 login"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8 login"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body class="login">
<!--<![endif]-->

  <div class="box-header">
    <h2>Administração - MMTECH</h2>
  </div>
  <div class="box" style="height:190px">
  
  <?php if(isset($_GET['message']) && $_GET['message'] == 'error'){ ?>
  <div class="notification error"> <span class="strong">Aviso:</span> Login ou Senha inválido. </div>
  <?php }else{ ?>
  <div class="notification tip"> <span class="strong">Aviso:</span> Digite seu login e senha. </div>
  <?php } ?>

    <form method="post" class="form col" action="<?php echo base_url('login/usuario/logar') ?>">
      <p>
        <label class="strong" for="Username">Login:</label>
        <input tabindex="1" id="Username" type="text" name="login" title="Informe seu Login." />
      </p>
      <p>
        <label class="strong" for="Password">Senha:</label>
        <input tabindex="2" id="Password" type="password" name="senha" title="Informe sua Senha." />
      </p>
      <p>
          <button type="submit" class="small fr">Acessar</button>
        </p>
    </form>
    
  </div>

<!-- Javascript at the bottom for fast page loading --> 

<!-- Javascript at the bottom for fast page loading --> 
<script type="text/javascript" src="http://www.google.com/jsapi"></script> 
<!-- Grab Google CDN's jQuery + jQuery UI. fall back to local if necessary --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script>!window.jQuery && document.write('<script src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"><\/script>')</script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script> 
<script>!window.jQuery && document.write('<script src="<?php echo base_url(); ?>js/jquery-ui-1.8.1.min.js"><\/script>')</script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tipsy.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.treeview.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cookie.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.lightbox-0.5.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.wysiwyg.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/functions.js"></script> 
<!--[if lt IE 7 ]>
    <script src="<?php echo base_url(); ?>js/dd_belatedpng.js"></script>
  <![endif]-->

</body>
</html>
