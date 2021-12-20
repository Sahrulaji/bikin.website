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
    <meta name="google-site-verification" content="oXCroOQAZN9ITY4Vh3IaeNj16wGia9ABaQIowFriGsw" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">
 <meta name="facebook-domain-verification" content="nzlkq94odfn1q16163juty2gdbvcjq" />
    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>    
    <script>
        var $_ = $
    </script>
    
   
   <script defer src="https://kit.fontawesome.com/6666aa38df.js"></script>
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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MBXSBF8');</script>
	<!-- End Google Tag Manager -->
	
	
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBXSBF8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->




  <a href="https://api.whatsapp.com/send?phone=628112635788&text=Halo,%20saya%20tertarik%20untuk%20Bikin.Website" target="_blank" class="tombol-whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp_ico.png" alt="scrollup"></a>
  
  <header id="nav-bar" class="with-top-nav">
    <div class="top-nav-bar">
      <div class="container">
        <ul class="wrap-top-nav">
            <!-- <li class="d-flex align-items-center top-contact-info">
                <i class="fab fa-whatsapp"></i>
                <a href="https://api.whatsapp.com/send?phone=628112635788&text=Halo,%20saya%20tertarik%20untuk%20Bikin.Website" target="_blank">08112635788</a>
            </li> -->
            <li class="d-flex align-items-center top-contact-info">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:02139711500" target="_blank">(021) 39711500</a>
            </li>
            <li class="d-flex align-items-center top-contact-info">
                <i class="far fa-envelope"></i>
                <a href="mailto:hello@bikin.website" target="_blank">hello@bikin.website</a>
            </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="logo">
          <a class="navbar-brand" href="<?=home_url('/')?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo">
            <div class="powered-by">By : Qwords</div>
          </a>
        </div>
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
                  <a class="nav-link " href="<?=home_url('/template')?>">Template</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link link-pesan" href="<?=home_url('/pesan')?>">Pesan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?=home_url('/klien')?>">Klien</a>
              </li>
              <!-- <li class="nav-item">
                  <a class="nav-link" href="<?=home_url('/harga')?>">Harga</a>
              </li> -->
              <li class="nav-item">
                  <a class="nav-link" href="<?=home_url('/bandingkan-paket')?>">Paket Website</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?=home_url('/hubungi')?>">Hubungi Kami</a>
              </li>
              <hr class="d-lg-none d-block separate-menu">
              <!-- <li class="d-lg-none d-flex nav-item top-contact-info">
                <i class="fab fa-whatsapp"></i>
                <a href="https://api.whatsapp.com/send?phone=628112635788&text=Halo,%20saya%20tertarik%20untuk%20Bikin.Website" target="_blank">08112635788</a>
              </li> -->
              <li class="d-lg-none d-flex nav-item top-contact-info">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:02139711500" target="_blank">(021) 39711500</a>
              </li>
              <li class="d-lg-none d-flex nav-item top-contact-info">
                <i class="far fa-envelope"></i>
                <a href="mailto:hello@bikin.website" target="_blank">hello@bikin.website</a>
              </li>
                  </ul>
                </div>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>