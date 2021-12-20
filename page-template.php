<?php
/* Template Name: Template */
get_header();
?>

    <!-----------------cover section--------------------->
    <section class="cover">
        <div class="container header">
            <div class="row cover-page">
                <div class="col-md-7 header-left">
                    <h2 class="promo-title">TEMPLATES</h2>
                    <p class="cover-subtitle">
                        <a href="<?=home_url('/')?>">BIKIN.WEB</a> memiliki berbagai pilihan template keren yang pas buat kamu. Didesain simple dan tanpa
                        ribet untuk berbagai keperluan seperti blog, bisnis, desainer, influencer, dsb.
                    </p>
                </div>

                <div class="col-md-5 text-center">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/canvas-banner.png" class="cover-picture img-fluid">
                  </div>
            </div>
               
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/klien-page/test.png" class="bottom-img wave-cover img-fluid">
    </section>


    <!-----------------templates section--------------------->

    <section class="templates-catalogue">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar">
                    <!-- Template navigation -->
                        <a class="category_template" id="_semua">SEMUA</a>
                        <a class="category_template" id="_gratis">GRATIS</a>
                        <a class="category_template" id="_berbayar">BERBAYAR</a>
                        <a class="category_template" id="_baru">BARU</a>
                        <a class="category_template" id="_popular">POPULAR</a>
                        <a class="category_template" id="_bisnis">BISNIS</a>
                        <a class="category_template" id="_event">EVENT</a>
                        <a class="category_template" id="_fashion">FASHION</a>
                        <a class="category_template" id="_fotografi">FOTOGRAFI</a>
                        <a class="category_template" id="_gayahidup">GAYA HIDUP</a>
                        <a class="category_template" id="_kesehatan">KESEHATAN</a>
                        <a class="category_template" id="_makanan">MAKANAN</a>
                        <a class="category_template" id="_pendidikan">PENDIDIKAN</a>
                        <a class="category_template" id="_portfolio">PORTFOLIO</a>
                        <a class="category_template" id="_senidesain">SENI & DESAIN</a>
                        <a class="category_template" id="_simpel">SIMPEL</a>
                        <a class="category_template" id="_teknologi">TEKNOLOGI</a>
                </div>

                <div class="col-lg-9">
                    <div class="container templates-list">
                        <div class="row">
                            <div class="template-item _semua _bisnis col-lg-6">
                                <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/agency.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-agency/" role="button">Preview
                                        Template</a>
                                </div>
                                <div class="template-name-price">
                                    <h3 class="align-left">Agency</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang sesuai untuk kebutuhan website bisnis.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisnis _makanan col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/coffee.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-coffee/" role="button">Preview
                                        Template</a>
                                </div>
                                <div class="template-name-price">
                                    <h3 class="align-left">Coffee Shop</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Template yang cocok untuk website pemasaran biji kopi, coffee shop, atau cafe.</p>
                                </div>
                            </div>
                       
                            <div class="template-item _semua _senidesain _bisnis col-lg-6">
                                <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/design_agency.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-design-agency/" target="_blank" role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Design Agency</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout yang cocok untuk agensi desain.</p>
                                </div>
                            </div>

                             <div class="template-item _semua _bisnis _makanan col-lg-6">
                                <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/farmers_market.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-farmers-market/" role="button">Preview
                                        Template</a>
                                </div>
                                <div class="template-name-price">
                                    <h3 class="align-left">Farmers Market</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout website yang sesuai untuk organisasi pertanian & hasil tani</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisnis _fashion col-lg-6">
                                <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/fashion.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-fashion/" role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Fashion</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Tampilan website yang sangat cocok untuk dunia fashion. </p>
                                </div>
                            </div>

                            <div class="template-item _semua _pendidikan col-lg-6">
                                <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/lms.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-lms/" role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">LMS</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout yang paling sesuai untuk website kursus berbagai bidang.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _event col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/wedding.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-wedding/" role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Wedding</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang paling sesuai untuk situs website pernikahan.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _kesehatan _bisnis _pendidikan col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/yoga.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-yoga/" role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Yoga Studio</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain website yang cocok untuk klub Yoga Profesional.</p>
                                </div>
                            </div>
                       
                            <div class="template-item _semua _makanan _bisnis col-lg-6">
                                <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/restaurant.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-restaurant/" role="button">Preview
                                        Template
                                    </a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Restaurant</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro
                                    </p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/travel_agency.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-travel-agency/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Travel Agency</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout yang cocok untuk agensi perjalanan wisata.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _senidesain _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/florist.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-florist/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Florist</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _bisnis _teknologi col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/saas_company.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-saas-company/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">SaaS Company</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Template yang cocok untuk web software as a service, perangkat lunak berbentuk layanan</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _senidesain _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/web_agency.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-web-agency/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Web Agency</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang paling sesuai untuk situs desain agensi</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _senidesain _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/interior_design.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-interior-design-company/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Interior Design Company</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang sesuai untuk kebutuhan website desain interior ruangan.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _bisnis _teknologi col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/digital_payments.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-digital-payments/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Digital Payments</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _senidesain col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/pottery_studio.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-pottery-studio/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Pottery Studio</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout yang paling sesuai untuk website pengrajin tembikar.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _bisnis _teknologi col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/seo_agency.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-seo-agency/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">SEO Agency</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua col-lg-6 _simpel">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/simple.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-simple/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Simple</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Tampilan yang pas untuk pemula website.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/business_consultant.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-business-consultant/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Business Consultant</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _makanan _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/juice_shop.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-juice-shop/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Juice Shop</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Cocok untuk situs penjualan jus, tips sehat, menu bugar, dsb.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _teknologi _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/software_marketing.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-software-marketing/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Software Marketing</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Brand awareness dapat kamu raih melalui padu padan tampilan menarik dan navigasi yang sederhana. Miliki template yang dinamis untuk mendukung kegiatan marketingmu.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _lifestlye col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/babysitter.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-babysitter/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Babysitter</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Template yang cocok untuk website penyedia jasa pengasuh anak.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _senidesain col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/design_conference.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-design-conference/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Design Conference</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                       
                            <div class="template-item _semua _makanan  col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/food_recipes.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-food-recipes/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Food Recipes</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang sesuai untuk kebutuhan website resep masakan.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _kesehatan _event col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/marathon.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-marathon/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Marathon</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _fashion _bisnis col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/cosmetic_shop.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-cosmetics-shop/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Cosmetic Shop</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout yang paling sesuai untuk website brand kosmetik.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _bisnis _makanan col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/tea_shop.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-tea-shop/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Tea Shop</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua col-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/auto_repair.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-auto-repair/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Auto Repair</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Tampilan website yang pas untuk workshop perbaikan kendaraan/bengkel.</p>
                                </div>
                            </div>
                            
                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/real_estate.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-real-estate/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Real Estate</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Lorem ipsum dolor sit amet, it elmator ez pisd asa kurnia
                                        ijtolimus ekopuri mok ijlsa tilkmo ekol, asd. Ti amo
                                        monteiro</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/car_dealer.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-car-dealer/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Car Dealer</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang sesuai untuk website pemasaran mobil.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/life_coach.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-life-coach/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Life Coach</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Tampilan website yang pas untuk website pelatihan gaya hidup ideal.</p>
                                </div>
                            </div>


                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/elementary_school.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-elementary-school/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Elementary School</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Layout yang paling sesuai untuk lembaga pendidikan sekolah dasar.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/digital_marketing.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-digital-marketing/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Digital Marketing</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang sesuai untuk kebutuhan website pemasaran digital.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/travel_blogger.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-travel-blog/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Travel Blog</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Template yang cocok untuk blog perjalanan wisata.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/jeweller.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-jewellery/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Jewellery</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Cocok untuk website penjualan perhiasan.</p>
                                </div>
                            </div>

                            <div class="template-item _semua _bisniscol-lg-6">
                               <div class="outer">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/law_firm.jpg" alt="..." class="img-thumbnail img-rounded">
                                    <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?=home_url('/')?>template-preview-law-firm/"  role="button">Preview
                                        Template</a>
                                </div>

                                <div class="template-name-price">
                                    <h3 class="align-left">Law Firm</h3>
                                    <h3 class="align-right gratis">GRATIS</h3>
                                </div>
                                <div class="wrapper">
                                    <p>Desain yang sesuai untuk kebutuhan website firma hukum profesional.</p>
                                </div>
                            </div>

                            

               

                          
                       
                       
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
                        <a href="<?=home_url('/harga')?>"> <button type="button" class="btn btn-outline-danger btn-mulai-footer">Bikin
                                Website
                                Sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------footer section--------------------->

    <?php
    get_footer();