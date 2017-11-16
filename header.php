<?php
/**
 * The Header for our theme.
 *
 * @package Skeleton WordPress Theme
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<title>Dualler</title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php wp_head(); ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/dualler.png"/>
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/overons">OVER ONS</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/portfolio">PORTFOLIO</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/blog">BLOG</a></li>
	  <li><a href="<?php echo get_template_directory_uri(); ?>/fotos">FOTO'S</a></li>
	  <li><a href="<?php echo get_template_directory_uri(); ?>/contactus">CONTACT</a></li>
    </ul>
  </div>
</nav>