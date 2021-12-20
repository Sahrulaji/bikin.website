<?php
/* The template for displaying 404 pages (Not Found)*/
get_header('bluev2');
?>  
<!-- section 404 -->
<section id="not-found" class="not-founds">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mb-5">
                <div class= "wrap-title">
                    <div class="title-404 text-center">
                        404 ERROR</div>
                    
                        <H2 class="sub-title text-center">
                        Oops! Sorry, Page Not Found</h2>
                        
                        <div class="col-md text-center pt-5">
                            <a href="<?=home_url()?>" class="btn btn-kembali">Back to home</a>
                        </div>
                    </div>        
                </div>  

            <div class="col-md-6 text-center">
                <div class="wrap-img">
                    <img class="img-not-found" src="<?php echo get_stylesheet_directory_uri(); ?>/img/404-not-found.png" alt="404">
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer('footerv2');