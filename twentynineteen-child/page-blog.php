<?php
/* Template Name: Blog */

get_header();
?>

    <!-----------------cover section--------------------->
    <section>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/banner-background.jpg" class="d-block w-100" alt="...">
                    <div class=" d-none d-md-block">
                         <a href="<?=home_url('/blog-article')?>" class="carousel-caption">
                            <h1 class="text-center">Insert title here</h1>
                            <p class="text-center">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/banner-background-2.jpg" class="d-block w-100" alt="...">
                    <div class="d-none d-md-block">
                         <a href="<?=home_url('/blog-article')?>" class="carousel-caption">
                            <h1 class="text-center">Insert title here</h1>
                            <p class="text-center">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/banner-background-3.jpg" class="d-block w-100" alt="...">
                    <div class="d-none d-md-block">
                        <a href="<?=home_url('/blog-article')?>" class="carousel-caption">
                            <h1 class="text-center">Insert title here</h1>
                            <p class="text-center">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/blog-curve-header.png" class="bottom-img wave-cover img-fluid">
    </section>


    <!-----------------navbar section (menu section - white)--------------------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light white-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarNav"
                aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars blue-menu" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="sidebarNav">
                <div class="container">
                    <div class="row">
                        <div class="col-9 text-center">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link white-nav" href="#">Semua <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-nav" href="klien.html">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-nav" href="template.html">Tutorial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-nav" href="blog.html">Kisah Sukses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-nav" href="harga.html">Update Bikin.Website</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-3 p-0">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari Artikel"
                                    aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Find</button>
                            </form>
                        </div>
                    </div>
                </div>


        </nav>
    </section>

    <!-----------------articles section--------------------->
    <section>
        <div class="container">
            <div class="row">

                <!------blog posts----->
                <div class="col-md-9 pl-0">
                    <div class="container">

                        <!--one row of article--->
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/image_placeholder.png" alt="..." class="rounded img-fluid">

                                <div class="container">
                                    <a href="<?=home_url('/blog-article')?>" class="article">
                                        <h6 class="article-title">Basic Tools You Will Need To Better
                                            Understand Current Trends</h6>
                                    </a>
                                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                        <p class="date">May 12, 2019</p>
                                    </span>
                                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Donec nec odio nulla. Donec sed eros ut erat finibus
                                        pharetra. Vivamus quis rhoncus felis, ut euismod dolor.
                                        Aliquam in ante eget…</p>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/image_placeholder.png" alt="..." class="rounded img-fluid">

                                <div class="container">
                                       <a href="<?=home_url('/blog-article')?>" class="article">
                                       <h6 class="article-title">Basic Tools You Will Need To Better
                                            Understand Current Trends</h6>
                                    </a>
                                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                        <p class="date">May 12, 2019</p>
                                    </span>
                                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Donec nec odio nulla. Donec sed eros ut erat finibus
                                        pharetra. Vivamus quis rhoncus felis, ut euismod dolor.
                                        Aliquam in ante eget…</p>

                                </div>
                            </div>
                        </div>
                        <!---------------->

                        <!--one row of article--->
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/image_placeholder.png" alt="..." class="rounded img-fluid">

                                <div class="container">
                                     <a href="<?=home_url('/blog-article')?>" class="article">
                                       <h6 class="article-title">Basic Tools You Will Need To Better
                                            Understand Current Trends</h6>
                                    </a>
                                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                        <p class="date">May 12, 2019</p>
                                    </span>
                                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Donec nec odio nulla. Donec sed eros ut erat finibus
                                        pharetra. Vivamus quis rhoncus felis, ut euismod dolor.
                                        Aliquam in ante eget…</p>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/image_placeholder.png" alt="..." class="rounded img-fluid">

                                <div class="container">
                                     <a href="<?=home_url('/blog-article')?>" class="article">
                                        <h6 class="article-title">Basic Tools You Will Need To Better
                                            Understand Current Trends</h6>
                                    </a>
                                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                        <p class="date">May 12, 2019</p>
                                    </span>
                                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Donec nec odio nulla. Donec sed eros ut erat finibus
                                        pharetra. Vivamus quis rhoncus felis, ut euismod dolor.
                                        Aliquam in ante eget…</p>

                                </div>
                            </div>
                        </div>
                        <!---------------->

                        <!--one row of article--->
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/image_placeholder.png" alt="..." class="rounded img-fluid">

                                <div class="container">
                                       <a href="<?=home_url('/blog-article')?>" class="article">
                                      <h6 class="article-title">Basic Tools You Will Need To Better
                                            Understand Current Trends</h6>
                                    </a>
                                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                        <p class="date">May 12, 2019</p>
                                    </span>
                                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Donec nec odio nulla. Donec sed eros ut erat finibus
                                        pharetra. Vivamus quis rhoncus felis, ut euismod dolor.
                                        Aliquam in ante eget…</p>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/image_placeholder.png" alt="..." class="rounded img-fluid">

                                <div class="container">

                                        <a href="<?=home_url('/blog-article')?>" class="article">
                                     <h6 class="article-title">Basic Tools You Will Need To Better
                                            Understand Current Trends</h6>
                                    </a>

                                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                        <p class="date">May 12, 2019</p>
                                    </span>
                                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Donec nec odio nulla. Donec sed eros ut erat finibus
                                        pharetra. Vivamus quis rhoncus felis, ut euismod dolor.
                                        Aliquam in ante eget…</p>

                                </div>
                            </div>
                        </div>
                        <!---------------->



                    </div>
                </div>

                <!------sidebar----->
                <div class="col-md-3" id="sidebar">
                    <div class="row pb-2">
                        <div class="col-md-5 p-0">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/placeholder.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="col-md-7 p-0">
                               <a href="<?=home_url('/blog-article')?>" class="article">
                                <p class="article-title">INSERT TITLE HERE</p>
                            </a>
                            <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                <p class="date">May 12, 2019</p>
                            </span>
                            <p class="news-description">Lorem Ipsum has been
                                the industry's standard
                                dummy text ...</p>
                        </div>
                    </div>

                    <div class="row pb-2">
                        <div class="col-md-5 p-0">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/placeholder.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="col-md-7 p-0">
                              <a href="<?=home_url('/blog-article')?>" class="article">
                                <p class="article-title">INSERT TITLE HERE</p>
                            </a>
                            <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                <p class="date">May 12, 2019</p>
                            </span>
                            <p class="news-description">Lorem Ipsum has been
                                the industry's standard
                                dummy text ...</p>
                        </div>
                    </div>

                    <div class="row pb-2">
                        <div class="col-md-5 p-0">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/placeholder.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="col-md-7 p-0">
                                <a href="<?=home_url('/blog-article')?>" class="article">
                                <p class="article-title">INSERT TITLE HERE</p>
                            </a>
                            <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                <p class="date">May 12, 2019</p>
                            </span>
                            <p class="news-description">Lorem Ipsum has been
                                the industry's standard
                                dummy text ...</p>
                        </div>
                    </div>

                    <div class="row pb-2">
                        <div class="col-md-5 p-0">
                            <div class="img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/placeholder.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="col-md-7 p-0">
                               <a href="<?=home_url('/blog-article')?>" class="article">
                                <p class="article-title">INSERT TITLE HERE</p>
                            </a>
                            <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-page/clock.svg" class="clock-icon">
                                <p class="date">May 12, 2019</p>
                            </span>
                            <p class="news-description">Lorem Ipsum has been
                                the industry's standard
                                dummy text ...</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-blue.png" class="bottom-img">
    </section>


    <!-----------------bikin button section--------------------->
    <section id="bikin-button-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    
                    <div>
                        <a href="<?=home_url('/harga')?>">
                        <button type="button" class="btn btn-outline-danger btn-mulai-footer">Bikin Website
                            Sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------footer section--------------------->

<?php
    get_footer();