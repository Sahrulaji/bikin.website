<?php
/* Template Name: Thanks */
get_header();
?>
<section class="thanks"> 
    <div class="container">
        <div class="thanks-container">
            <div class="wrapper-content text-center">
                <h2 class="thanks-text">Terimakasih!</h2>
                <p class="thanks-content">Email anda telah terkirim, kami akan segera menghubungi anda.</p>
                <div class="icon-thanks">
                    <i class="far fa-envelope"></i>
                    <span class="line-envelop"></span>
                </div>
                <a href="<?=home_url('/')?>" class="back-home"><i class="fas fa-long-arrow-alt-left"></i> Kembali Ke halaman awal</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();