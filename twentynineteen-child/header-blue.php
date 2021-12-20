<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php 
    if ( is_front_page() ) :
  ?>
      <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick/slick.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick/slick-theme.css"> -->
  <?php  
      else :
      '';
    endif;
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/all.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.css">
   
   <script src="https://kit.fontawesome.com/6666aa38df.js"></script>
   <?php wp_head(); ?>
   <?php 
    if ( is_user_logged_in() ) {
        echo '<script type="text/javascript">
            jQuery(document).ready(function(){
              jQuery("body").addClass("logged-in")
            });
            </script>';
    }else{
        echo '';}
    ?>
</head>
<body <?php body_class(); ?>>
  <a href=#nav-bar onclick="topFunction()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/scrollup.png" id="scrollup" alt="scrollup"></a>
  
  <header id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <h1 class="logo"><a class="navbar-brand" href="<?=home_url('/')?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo"></a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="<?=home_url('/')?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=home_url('/fitur')?>">Fitur <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=home_url('/klien')?>">Klien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?=home_url('/template')?>">Template</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="http://blog.bikin.website">Blog</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?=home_url('/harga')?>">Harga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=home_url('/hubungi')?>">Hubungi Kami</a>
            </li>
            <li class="nav-item py-2">
                <?php if ( is_user_logged_in() ) { ?>
                    <a href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI'] ); ?>" class="btn btn-danger py-2 navbar-btn white-nav text-center">Logout</a>
                <?php }else{ ?>
                    <a href="<?=home_url('/login')?>" class="btn btn-danger py-2 navbar-btn white-nav text-center">Log In</a> 
                <?php } ?>
            </li>
            <!-- <li class="nav-item py-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="indo-flag" src="<?php echo get_stylesheet_directory_uri(); ?>/img/indo-flag.png" alt="indo-flag"> ID </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"> <img class="indo-flag" src="<?php echo get_stylesheet_directory_uri(); ?>/img/indo-flag.png" alt="indo-flag">
                        EN
                    </button>
                </div>
            </li> -->
        </ul>
      </div>
    </nav>
    </header>