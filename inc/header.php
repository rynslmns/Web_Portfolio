<!DOCTYPE HTML>
<!--
  Twenty by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title><?php echo $Title;?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_DIRECTORY; ?>images/r-icon.png">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="<?php echo BASE_DIRECTORY . 'css/ie/html5shiv.js';?>"></script><![endif]-->
    <script src="<?php echo BASE_DIRECTORY . 'js/jquery.min.js';?>"></script>
    <script src="<?php echo BASE_DIRECTORY . 'js/jquery.dropotron.min.js';?>"></script>
    <script src="<?php echo BASE_DIRECTORY . 'js/jquery.scrolly.min.js';?>"></script>
    <script src="<?php echo BASE_DIRECTORY . 'js/jquery.scrollgress.min.js';?>"></script>
    <script src="<?php echo BASE_DIRECTORY . 'js/skel.min.js';?>"></script>
    <script src="<?php echo BASE_DIRECTORY . 'js/skel-layers.min.js';?>"></script>
    <script src="<?php echo BASE_DIRECTORY . $InitFile;?>"></script>
    <noscript>
      <link rel="stylesheet" href="<?php echo BASE_DIRECTORY . 'css/skel.css';?>" />
      <link rel="stylesheet" href="<?php echo BASE_DIRECTORY . 'css/style.css';?>" />
      <link rel="stylesheet" href="<?php echo BASE_DIRECTORY . 'css/style-wide.css';?>" />
      <link rel="stylesheet" href="<?php echo BASE_DIRECTORY . 'css/style-noscript.css';?>" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo BASE_DIRECTORY . 'css/ie/v8.css';?>" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo BASE_DIRECTORY . 'css/ie/v9.css';?>" /><![endif]-->
  </head>
  <body class="index">

    <!-- Header -->
      <header id="header" <?php echo $HeaderClass;?>
        <h1 id="logo"><a href="<?php echo BASE_DIRECTORY;?>">Ryan Salmons</a></h1>
        <nav id="nav">
          <ul>
            <li <?php if($NavClass=='home'){echo 'class="current"';}?>><a href="<?php echo BASE_DIRECTORY;?>">Home</a></li>
            <li <?php if($NavClass=='resume'){echo 'class="current"';}?>><a href="<?php echo BASE_DIRECTORY . 'resume/';?>">Resume</a></li>
            <li <?php if($NavClass=='contact'){echo 'class="current"';}?>><a href="<?php echo BASE_DIRECTORY . 'contact/';?>" <?php echo $ContactClass;?>Contact</a></li>
          </ul>
        </nav>
      </header>
