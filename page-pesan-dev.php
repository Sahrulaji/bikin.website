<?php
/* Template Name: Pesan Dev*/
get_header();
?>
    <?php 
        function req_api($url,$arrayParam){
            
            // $url = 'https://api.qwords.com/invoice/invoice_domain_hosting_gfn';
            
            //url-ify the data for the POST
            $fields_string='';
            foreach($arrayParam as $key=>$value){
            $fields_string .= $key.'='.$value.'&';
            }
            rtrim($fields_string, '&');
            
            //open connection
            $ch = curl_init();
            
            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('QW-TOKEN: Z08wRWdvUE9Lb29iZW8tNTUtYW5kaXc='));
            curl_setopt($ch,CURLOPT_POST, count($arrayParam));
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            
            //execute post
            $result = curl_exec($ch);
            $err = curl_error($ch);
            //close connection
            curl_close($ch);
            
            $result=json_decode($result);
            if ($err) {
                     die( "cURL Error #:" . $err );
            }
            
            return $result;
        }
        $data=req_api('https://portal.bikin.website/apis/whmcs-api/get-product.php',array());

        $data=$data->data;
        ;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        foreach($data as $r){

            $pricing=$r->pricing;
            // $pricing=$pricing->IDR;

            $pid[] = $r->pid;
            $nama[] = $r->name;
            $harga[] = $pricing;
            // $perpanjang[] = $pricing->annually;

        }
        
        $promocodes = ['ONLINEDISCOUNT','ENTRYDISCOUNT','UKMDISCOUNT','CORPORATEDISKON','ECOMMERCEDISCOUNT','WEDDINGDISCOUNT','PILKADADISCOUNT'];
        $data_codes=req_api('http://portal.bikin.website/apis/whmcs-api/get-promotion.php?codes='. implode(',',$promocodes),array());
        
        
    ?>
    <!-----------------cover section--------------------->
<section class="pesan-banner">
    <div class="container">
        <h1 class="title-section text-center">Pesan</h1>
        <div class="wrapper-step-indicator">
            <div class="steps completed-step" id="step-paket">
                <div class="circle-step">1</div>
                <span class="text-step">Pilih<br>Paket</span>
            </div>
            <div class="steps" id="step-domain">
                <div class="circle-step">2</div>
                <span class="text-step">Pilih<br>Domain</span>
            </div>
            <div class="steps" id="step-template">
                <div class="circle-step">3</div>
                <span class="text-step">Pilih<br>Template</span>
            </div>
            <div class="steps" id="step-metode">
                <div class="circle-step">4</div>
                <span class="text-step">Metode<br>Pembayaran</span>
            </div>
            <!-- <div class="steps" id="step-konfirmasi">
                <div class="circle-step">4</div>
                <span class="text-step">Konfirmasi<br>Pembayaran</span>
            </div> -->
        </div>
    </div>
</section>

<section class="wizard-pesan pt-0">
    <form action="#" method="POST" enctype="multipart/form-data" id="myform">
        <!-----------------Packet section--------------------->
        <div class="section-pesan section-paket" id="package-section">
            <div class="container">
                <h2 class="title-24 title-acc-blue text-center text-white">Pilih Paket</h2>
                <div id="tabs-package">
                    <div class="container">
                        <ul>
                            <li><a href="#online-package">Paket Online</a></li>
                            <li><a href="#entry-package">Paket ENTRY</a></li>
                            <li><a href="#ukm-package">Paket UKM</a></li>
                            <li><a href="#corporate-package">Paket Corporate</a></li>
                            <li><a href="#ecommerce-package">Paket Ecommerce</a></li>
                            <li><a href="#wedding-package">Paket Wedding</a></li>
                            <!--<li><a href="#pilkada-package">Paket Pilkada</a></li>-->
                        </ul>
                    </div>
                    <div class="packages-wrapper">

                        <div id="online-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">Go Online Starter Pack</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-online.jpg" class='image-package d-md-none d-block' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <p>Ditujukan untuk membantu usaha baru agar dapat Go Online dengan #TerimaBeres</p>
                                            <div class="d-flex">
                                                <!--<h2 class="mb-4 text-coret">Rp <span class="price">1,8</span> juta</h2>-->
                                                <!--<h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">1</span> juta</h2>-->
                                                <h2 class="mb-4 text-coret">Rp <span class="price">150</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">84</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;">&nbsp;/ bulan</h4>
                                            </div>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket UKM</p> -->
                                            <!--<h3 class="perpanjangan">Perpanjangan Rp 800 ribu</h3>-->
                                            <h3 class="perpanjangan">Perpanjangan Rp 67 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        1 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        1 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        1x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 1x/3bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        1GB Hybrid Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .COM
                                                    </li>
                                                    <li>
                                                        FREE Let's Encrypt SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ±2 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-online.jpg" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[1]; ?>" data="<?php echo $nama[1]; ?>" data-harga="<?php echo $harga[1] ?>" data-promocode="ONLINEDISCOUNT" data-discount="<?php echo $data_codes[0]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="entry-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">Go Online Starter Pack</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-entry.jpg" class='image-package d-md-none d-block ' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <p>Ditujukan untuk membantu usaha baru agar dapat Go Online dengan #TerimaBeres</p>
                                            <div class="d-flex">
                                                <!--<h2 class="mb-4 text-coret">Rp <span class="price">2,5</span> juta</h2>-->
                                                <!--<h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">1,8</span> juta</h2>-->
                                                <h2 class="mb-4 text-coret">Rp <span class="price">209</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">150</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;">&nbsp;/ bulan</h4>
                                            </div>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket UKM</p> -->
                                            <!--<h3 class="perpanjangan">Perpanjangan Rp 1,2 juta</h3>-->
                                            <h3 class="perpanjangan">Perpanjangan Rp 100 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        3 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        3 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        1x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 1x/bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        2GB Hybrid Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .COM
                                                    </li>
                                                    <li>
                                                        FREE Let's Encrypt SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ±3 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-entry.jpg" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[5]; ?>" data="<?php echo $nama[5]; ?>" data-harga="<?php echo $harga[5] ?>" data-promocode="ENTRYDISCOUNT" data-discount="<?php echo $data_codes[1]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="ukm-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">Most Popular Package</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-umkm.png" class='image-package d-md-none d-block ' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <p>Cocok bagi para pelaku UKM yang ingin membangun website baru untuk bisnisnya.</p>
                                            <div class="d-flex">
                                                <!--<h2 class="mb-4 text-coret">Rp <span class="price">4,5</span> juta</h2>-->
                                                <!--<h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">2,7</span> juta</h2>-->
                                                <h2 class="mb-4 text-coret">Rp <span class="price">375</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">225</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;">&nbsp;/ bulan</h4>
                                            </div>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket UKM</p> -->
                                            <!--<h3 class="perpanjangan">Perpanjangan Rp 1,8 juta</h3>-->
                                            <h3 class="perpanjangan">Perpanjangan Rp 150 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        5 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        5 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        2x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 2x/bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        2GB SSD Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .COM
                                                    </li>
                                                    <li>
                                                        FREE Sectigo Positive SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ±3 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-umkm.png" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[0]; ?>" data="<?php echo $nama[0]; ?>" data-harga="<?php echo $harga[0] ?>" data-promocode="UKMDISCOUNT" data-discount="<?php echo $data_codes[2]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="corporate-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">High Performance Cloud Hosting</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-corporate.png" class='image-package d-md-none d-block ' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <p>Pilihan tepat untuk website perusahaan Anda yang handal dan profesional, dilengkapi dengan hosting berperforma tinggi.</p>
                                            <div class="d-flex">
                                                <!--<h2 class="mb-4 text-coret">Rp <span class="price">6,5</span> juta</h2>-->
                                                <!--<h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">4,5</span> juta</h2>-->
                                                <h2 class="mb-4 text-coret">Rp <span class="price">542</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">375</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;">&nbsp;/ bulan</h4>
                                            </div>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket CORPORATE</p> -->
                                            <!--<h3 class="perpanjangan">Perpanjangan Rp 3,5 juta</h3>-->
                                            <h3 class="perpanjangan">Perpanjangan Rp 292 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        15 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        15 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        3x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 3x/bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        5GB SSD Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .COM
                                                    </li>
                                                    <li>
                                                        FREE Sectigo Positive SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ± 7 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-corporate.png" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[6]; ?>" data="<?php echo $nama[6]; ?>" data-harga="<?php echo $harga[6] ?>" data-promocode="ECOMMERCEDISCOUNT" data-discount="<?php echo $data_codes[3]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="ecommerce-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">Integrated Payment & Shipping Gateways</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-ecommerce.png" class='image-package d-md-none d-block ' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <p>Sesuai untuk mereka yang fokus dalam penyebaran, pembelian, penjualan, pemasaran barang/jasa secara online.</p>
                                            <div class="d-flex">
                                                <!--<h2 class="mb-4 text-coret">Rp <span class="price">10,5</span> juta</h2>-->
                                                <!--<h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">9,5</span> juta</h2>-->
                                                <h2 class="mb-4 text-coret">Rp <span class="price">875</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">792</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;">&nbsp;/ bulan</h4>
                                            </div>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket ECOMMERCE</p> -->
                                            <!--<h3 class="perpanjangan">Perpanjangan Rp 6,5 juta</h3>-->
                                            <h3 class="perpanjangan">Perpanjangan Rp 542 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket ECOMMERCE</p> -->
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        25 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        25 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        5x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 5x/bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        5GB SSD Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .COM
                                                    </li>
                                                    <li>
                                                        FREE Sectigo Positive SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ± 14 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-ecommerce.png" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[7]; ?>" data="<?php echo $nama[7]; ?>" data-harga="<?php echo $harga[7] ?>" data-promocode="CORPORATEDISCOUNT" data-discount="<?php echo $data_codes[4]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="wedding-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">Advanced Design by Our Designers</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-wedding.png" class='image-package d-md-none d-block ' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <p>Ditujukan bagi pasangan yang ingin membuat undangan online untuk pernikahannya, lengkap dengan nama domain .WEDDING</p>
                                            <div class="d-flex">
                                                <!--<h2 class="mb-4 text-coret">Rp <span class="price">6,5</span> juta</h2>-->
                                                <!--<h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">4,5</span> juta</h2>-->
                                                <h2 class="mb-4 text-coret">Rp <span class="price">542</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">372</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;">&nbsp;/ bulan</h4>
                                            </div>
                                            <!-- <p class="title-fitur">Semua fitur dari Paket Wedding</p> -->
                                            <!--<h3 class="perpanjangan">Perpanjangan Rp 1,6 juta</h3>-->
                                            <h3 class="perpanjangan">Perpanjangan Rp 134 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        10 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        10 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        3x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 3x/bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        5GB SSD Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .WEDDING
                                                    </li>
                                                    <li>
                                                        FREE Sectigo Positive SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ± 7 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-wedding.png" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[4]; ?>" data="<?php echo $nama[4]; ?>" data-harga="<?php echo $harga[4] ?>" data-promocode="WEDDINGDISCOUNT" data-discount="<?php echo $data_codes[5]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div id="pilkada-package" class="tabs-package">
                            <div class="container">
                                <div class="text-center mb-md-5 mb-4 special-list-wrapper ">
                                    <span class="special-list">Advanced Design by Our Designers</span>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-pilkada.jpg" class='image-package d-md-none d-block' alt="image package">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="content-package">
                                            <div class="d-flex">
                                                <h2 class="mb-4 text-coret">Rp <span class="price">542</span> rb</h2>
                                                <h2 class="mb-4 text-orange-1 font-weight-bold ml-3">Rp <span class="price">375</span> rb</h2>
                                                <h4 class="" style="padding-top: 1.4em;font-size: 14px;"> / bulan</h4>
                                            </div>
                                            <h3 class="perpanjangan">Perpanjangan Rp 134 rb / bulan</h3>
                                            <small>*Periode berlangganan minimal setahun</small>
                                            <div class="d-md-flex d-block">
                                                <ul class="list-harga left-list mr-md-3 mb-0">
                                                    <li>
                                                        10 Jumlah Halaman
                                                    </li>
                                                    <li>
                                                        10 Akun Email Profesional
                                                    </li>
                                                    <li>
                                                        3x Revisi Design
                                                    </li>
                                                    <li>
                                                        Kuota Update 3x/bulan
                                                    </li>
                                                </ul>
                                                <ul class="list-harga right-list mb-md-0">
                                                    <li>
                                                        5GB SSD Disk Storage
                                                    </li>
                                                    <li>
                                                        FREE Domain .COM
                                                    </li>
                                                    <li>
                                                        FREE Sectigo Positive SSL
                                                    </li>
                                                    <li>
                                                        Pengerjaan ± 7 Hari Kerja
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="wrapp-additional-fitur">
                                            <h3 class="perpanjangan">Fitur yang terintegrasi di semua paket:</h3>
                                            <div class="d-md-flex d-block">
                                                <ul class="additional-fitur list-harga left-list mr-md-3 mb-0">
                                                    <li>Live Chat</li>
                                                    <li>Link Marketplace</li>
                                                    <li>Sosial Media</li>
                                                </ul>
                                                <ul class="additional-fitur list-harga right-list mb-md-0">
                                                    <li>Statistik Website</li>
                                                    <li>Backup Mingguan</li>
                                                    <li>Customer Support 24x7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 min-he-50">
                                        <div class="text-right">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-pilkada.jpg" class='image-package d-md-block d-none' alt="image package">
                                            <a href="#" class="btn btn-pesan" data-pid="<?php echo $pid[2]; ?>" data="<?php echo $nama[2]; ?>" data-harga="<?php echo $harga[2] ?>" data-promocode="PILKADADISCOUNT" data-discount="<?php echo $data_codes[6]->value ?>">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="mt-md-5 mt-3">
                            <div class="d-md-flex d-block justify-content-center align-items-center">
                                <h3 class="title-24 text-center mb-md-0">Kesulitan menentukan paket atau custom website?</h2>
                                <a href="<?=home_url('/hubungi')?>" class="btn btn-hub ml-md-3">GRATIS Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-----------------Caridomain section---------------------> 
        <div class="section-pesan section-cari-domain container" id="cari-domain">
            <div style="display:block">
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="max-width: 60%;margin: auto;">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pesan Domain Baru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sudah Memiliki Domain</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="transfer-tab" data-toggle="tab" href="#transfer-content" role="tab" aria-controls="transfer" aria-selected="false">Transfer Domain</a>
                  </li>
                </ul>
                
                <div class="tab-content" id="myTabContent">
                  
                  <div class="tab-pane fade show active row" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-12 text-center mt-5">
                        <label class="title-section small-title-section" for="input-cari-domain-2" style="vertical-align: sub;">Pesan Domain Baru</label>
                    </div>
                    <div class="col-12 text-center">
                        <input type="text" class="form-control m-auto w-md-50" id="input-cari-domain-2" placeholder="example">
                        <select id="input-tld-register" class="input-tld"></select>
                    </div>
                    
                    <div class="col-12 my-3 text-center" style="display:none">
                        <button id="btn-cari-domain-2" class="btn btn-primary" style="background:#a55bdc">Cek Ketersediaan Domain</button>
                    </div>
                  </div>
                  
                  <div class="tab-pane fade row" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-12 text-center mt-5">
                            <label class="title-section small-title-section" for="input-transfer-domain-2" style="vertical-align: sub;">Sudah Memiliki Domain</label>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" class="form-control m-auto w-md-50" id="input-transfer-domain-2" placeholder="example.com">
                        </div>
                        <div class="col-12 mt-3 text-center" style="display:none">
                            <button id="btn-transfer-domain-2" class="btn btn-primary" style="background:#a55bdc">Transfer Domain dari luar Qwords</button>
                            <button id="btn-transfer-domain-qwords-2" class="btn ml-4 next-step" style="background: #FFB74B;color: white;">Transfer Domain dari Qwords</button>
                        </div>
                  </div>
                  
                  <div class="tab-pane fade row" id="transfer-content" role="tabpanel" aria-labelledby="transfe-tab">
                        <div class="col-12 text-center mt-5">
                            <label class="title-section small-title-section" for="input-transfer-domain-3" style="vertical-align: sub;">Transfer Domain</label>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" class="form-control m-auto w-md-50" id="input-transfer-domain-3" placeholder="example">
                            <select id="input-tld-transfer" class="input-tld"></select>
                        </div>
                        <div class="col-12 mt-3 text-center" style="display:none">
                            <button id="btn-transfer-domain-3" class="btn btn-primary" style="background:#a55bdc">Transfer Domain dari luar Qwords</button>
                        </div>
                  </div>
                  
                </div>
                
                <div id="suggest-search" class="text-center" style="width:50%;margin:auto;position:relative;top:-30px;display:none" >
                    <div class="d-none">
                        <button 
                            class="btn btn-link btn-block text-left" 
                            type="button" 
                            data-toggle="collapse" 
                            data-target="#collapseOne" 
                            aria-expanded="true" 
                            style="font-size:.8em"
                            aria-controls="collapseOne">
                          Advance Search
                        </button>
                    </div>
                    
                    <div id="collapseOne" class="collapse show mt-3" aria-labelledby="headingOne" data-parent="#suggest-search">
                        <div class="mb-3 d-none"  >
                            <h5 style="font-size:1em;">Pilih negara :</h5>
                            <select id="country-input" class="form-control">
                                <option value="eng">English</option>
                                <option value="dut">Dutch</option>
                                <option value="fre">French</option>
                                <option value="ita">Italian</option>
                                <option value="tur">Turkish</option>
                                <option value="ind" selected="">Indonesian</option>
                            </select>
                        </div>
                        <h5 style="font-size:1em">Saran domain :</h5>
                        <div class="row" id="section-suggest">
                            <p class="m-auto text-muted text-13">Ketik sesuatu di pencarian domain di atas...</p>
                        </div>
                    </div>
                    <hr/>
                </div>
                
                <div class=" text-center">
                    <label> Selamat anda mendapatkan gratis my.id </label>
                    <input type="text" class="form-control m-auto w-md-50" id="free-my-id" placeholder="Masukan domain .my.id anda disini">
                </div>
                
            </div>
            
            <div style="display:none">
                <div class="row">
                    <div class="col-12 text-center">
                        <label class="title-section small-title-section" for="input-cari-domain" style="vertical-align: sub;">Pesan Domain Baru</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <input type="text" class="form-control m-auto w-md-50" id="input-cari-domain" placeholder="example">
                    </div>
                    <div class="col-12 my-3 text-center">
                        <button id="btn-cari-domain" class="btn btn-primary" style="background:#a55bdc">Cek Ketersediaan Domain</button>
                    </div>
                    <hr class="col-12 divider">
                    <div class="col-12 text-center">
                        <label class="title-section small-title-section" for="input-cari-domain" style="vertical-align: sub;">Sudah Memiliki Domain</label>
                    </div>
                    <div class="col-12 text-center">
                        <input type="text" class="form-control m-auto w-md-50" id="input-transfer-domain" placeholder="example">
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button id="btn-transfer-domain" class="btn btn-primary" style="background:#a55bdc">Transfer Domain dari luar Qwords</button>
                        <button id="btn-transfer-domain-qwords" class="btn ml-4 next-step" style="background: #FFB74B;color: white;">Transfer Domain dari Qwords</button>
                    </div>
                </div>
                <div class="row mt-3" style="display:none" id="search-result">
                    <p class="col-12 text-center"> <span data-info>Domain</span> <b><span data-domain>sdadadsa.com</span></b> <span data-available>tidak tersedia</span> </p>
                </div>
                <div class="row mt-3" style="display:none" id="search-result-transfer">
                    <p class="col-12 text-center">  </p>
                </div>
            </div>

            <div class="container mt-5">
                <div class="btn-next-back">
                    <div class="btn back-step" id="backto-package">Back</div>
                    <input type="button" class="btn next-step" id="decoy-nextto-template" value="Next" style="display:block">
                    <input type="button" class="btn next-step disable-btn" id="nextto-template" value="Next" disabled style="display:none">
                </div>
            </div>
            
        </div>

        
        <!-----------------Templates section--------------------->    
        <div class="section-pesan templates-catalogue" id="pilih-template">
            <div class="row">
                <div class="col-12 text-center">
                    <label class="title-section small-title-section" for="input-cari-domain" style="vertical-align: sub;">Silahkan pilih template</label>
                </div>
            </div>
            <div class="accordion" id="accordionTemplate">
                <!-- pilih template -->
                <div class="card">
                    <div class="container">
                        <div class="card-header" id="headingTemplate">
                            <h2 class="mb-0 title-24 collapsed" data-toggle="collapse" data-target="#collapseTemplate" aria-expanded="true" aria-controls="collapseTemplate">
                                Pilih Template
                            </h2>
                        </div>
                    </div>

                    <div id="collapseTemplate" class="collapse" aria-labelledby="headingTemplate" data-parent="#accordionTemplate">
                        <div class="card-body">
                            <!-- content template -->
                            <div class="container">
                                <div class="d-flex header-pesan-template">
                                    <h2 class="title-section small-title-section text-left">Cari Berdasarkan Kategori</h2>
                                    <div class="search-template-pesan">
                                        <input type="text" id="myInput" onkeyup="mySearch()" placeholder="Agency, Coffee Shop ..." title="Search template">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-cat">
                                <div class="content">
                                    <div class="wrapper-sidenav">
                                        <a class="category_template selected" id="semua">SEMUA</a>
                                        <a class="category_template" id="gratis">GRATIS</a>
                                        <a class="category_template" id="berbayar">BERBAYAR</a>
                                        <a class="category_template" id="baru">BARU</a>
                                        <a class="category_template" id="popular">POPULAR</a>
                                        <a class="category_template" id="bisnis">BISNIS</a>
                                        <a class="category_template" id="event">EVENT</a>
                                        <a class="category_template" id="fashion">FASHION</a>
                                        <a class="category_template" id="fotografi">FOTOGRAFI</a>
                                        <a class="category_template" id="gaya-hidup">GAYA HIDUP</a>
                                        <a class="category_template" id="kesehatan">KESEHATAN</a>
                                        <a class="category_template" id="makanan">MAKANAN</a>
                                        <a class="category_template" id="pendidikan">PENDIDIKAN</a>
                                        <a class="category_template" id="portfolio">PORTFOLIO</a>
                                        <a class="category_template" id="seni-desain">SENI & DESAIN</a>
                                        <a class="category_template" id="simpel">SIMPEL</a>
                                        <a class="category_template" id="teknologi">TEKNOLOGI</a>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="">
                                    <?php 
                                        // Set the arguments for the query
                                        $args = array( 
                                        'numberposts'		=> -1,
                                        'post_type'		=> 'templates',
                                        'orderby' 		=> 'date',
                                        'order' 		=> 'ASC',
                                        'taxonomy'      => 'category',
                                        );

                                        // Get the posts
                                        $myposts = get_posts($args);

                                        // If there are posts
                                        if($myposts): ?>
                                    
                                    <div class="list-wrapper">
                                        <div class="container templates-list">
                                            <ul class="row" id="listing">   
                                                <?php
                                                    // Loop the posts
                                                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                                    <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                                        <a href="#" class="visibility-hidden"><?php echo get_the_title($post->ID); ?></a>
                                                        <!-- Image -->
                                                        <div class="outer"> 
                                                            <?php if ( has_post_thumbnail() ) {
                                                                echo get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'img-thumbnail img-rounded mb-0'));
                                                            } else { ?>
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>" class="img-thumbnail img-rounded mb-0">
                                                            <?php } ?>
                                                            <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_permalink($mypost->ID); ?>" target="_blank">Preview</a>
                                                        </div> 	
                                                    
                                                        <!-- Content -->
                                                        <div class="wrapper px-md-3 px-2">
                                                            <div class="template-name-price">
                                                                <h3 class="align-left">
                                                                    <?php echo get_the_title($post->ID); ?>
                                                                </h3>
                                                            </div>
                                                            <?php the_excerpt(); ?>
                                                        </div>
                                                        <div class="wrapp-bottom-themes">
                                                            <a class="btn demo-btn" href="<?php echo get_permalink($post->ID); ?>" target="_blank">Demo</a>
                                                            <a class="btn chose-btn" href="#" data-template="<?php echo get_the_title($post->ID); ?>">Pilih</a>
                                                        </div>
                                                    </li>

                                                <?php endforeach; wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                                <?php the_excerpt(); ?>
                                            </ul>
                                            
                                            <div class="container load-more-button">
                                                <button type="button" class="btn btn-pesan w-auto">Lihat Lebih Banyak</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- content template -->
                        </div>
                    </div>
                </div>

                <!-- sample website -->
                <div class="card">
                    <div class="container">
                        <div class="card-header" id="headingUrl">
                            <h2 class="mb-0 title-24 collapsed" data-toggle="collapse" data-target="#collapseUrl" aria-expanded="false" aria-controls="collapseUrl">
                                Sample Website
                            </h2>
                        </div>
                    </div>
                    <div id="collapseUrl" class="collapse" aria-labelledby="headingUrl" data-parent="#accordionTemplate">
                        <div class="container">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputURL">Berikan link/URL website lain sebagai referensi yang paling mendekati kebutuhan Anda.</label>
                                    <input type="text" class="form-control" id="inputURL" placeholder="Masukkan link/URL">
                                    <div class="url-error">URL yang Anda masukkan tidak valid.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Designer Choice -->
                <div class="card">
                    <div class="container">
                        <div class="card-header" id="headingDesigner">
                            <h2 class="mb-0 title-24 collapsed" data-toggle="collapse" data-target="#collapseDesigner" aria-expanded="false" aria-controls="collapseDesigner">
                            Designer Choice
                            </h2>
                        </div>
                    </div>
                    <div id="collapseDesigner" class="collapse" aria-labelledby="headingDesigner" data-parent="#accordionTemplate">
                        <div class="container">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Berikan kebebasan pada designer kami untuk memilih template yang paling cocok dengan kebutuhan Anda.</label>
                                    <label for="inputDesigner" class="checkcontainer mb-0">
                                        Designer Choice
                                        <input type="checkbox" id="inputDesigner">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image referensi -->
                <div class="card">
                    <div class="container">
                        <div class="card-header" id="headingCustom">
                            <h2 class="mb-0 title-24 collapsed" data-toggle="collapse" data-target="#collapseCustom" aria-expanded="false" aria-controls="collapseCustom">
                                Image Referensi
                            </h2>
                        </div>
                    </div>
                    <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom" data-parent="#accordionTemplate">
                        <div class="container">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fileToUpload">Upload gambar (.png, .jpg, .jpeg, .pdf) yang dirasa mewakili kebutuhan Anda untuk tata letak website yang akan dibuat.</label>
                                    <input type="file" name="image" id="fileToUpload" class="upload-files" accept="application/pdf, image/jpg, image/jpeg, image/png">
                                    <img class="upload-img" src="#" alt="your image" onerror="this.onerror=null;this.src='<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png';" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="btn-next-back">
                    <div class="btn back-step" id="backto-domain">Back</div>
                    <input type="button" class="btn next-step disable-btn" id="nextto-metode-pembayaran" value="Next" disabled>
                </div>
            </div>
        </div>

        <!-----------------Metode Pembayaran section--------------------->
        <div class="section-pesan section-paket" id="metode-pembayaran-section">
            <div class="container">
                <h2 class="title-24 title-acc-blue text-center text-white">Metode Pembayaran</h2>
                <div class="wrap-form-metode">
                    <div class="login-metode">
                        Sudah punya akun? <a href="#" class="text-black link-underline" id="login-btn">klik disini untuk login</a>. Atau <a href="#" id="register-btn" class="text-black link-underline">klik disini untuk register</a>.
                    </div>
                </div>

                <div class="wrap-billing">
                    <h3 class="text-18 mb-4">Data Diri</h3>
                    <div id="billing-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputNama">Nama</label>
                                    <input type="text" class="form-control" id="inputNama" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputMail">Email</label>
                                    <input type="email" class="form-control" id="inputMail" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputPerusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="inputPerusahaan" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputAlamat">Alamat</label>
                                    <input type="text" class="form-control mb-3" id="inputAlamat" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="inputKota">Kota</label>
                                    <input type="text" class="form-control" id="inputKota" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="inputPostCode">Kode Pos</label>
                                    <input type="number" class="form-control" id="inputPostCode" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="wrap-bank">
                    <h3 class="text-18 mb-2">Metode Pembayaran</h3>
                    <div class="bank-list">
                        <!--
                        <label class="checkBank">
                            <input type="radio" checked="checked" name="pay_bank" id="bca" value="banktransfer">
                            <span class="radiobtn bca"></span>
                        </label>
                    
                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="mandiri" value="banktransfer">
                            <span class="radiobtn mandiri"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="indodana" value="indodana">
                            <span class="radiobtn indodana"></span>
                        </label> -->
                        
                        
                            <label class="checkBank">
                                <input type="radio" checked="checked" name="pay_bank" id="bca" value="bcava">
                                <span class="radiobtn bca"></span>
                            </label>
                        
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="mandiri" value="mandiriva">
                                <span class="radiobtn mandiri"></span>
                            </label>
                        
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="bii" value="biiva">
                                <span class="radiobtn bii"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="bni" value="bniva">
                                <span class="radiobtn bni"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="bri" value="briva">
                                <span class="radiobtn bri"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="danamon" value="danamonva">
                                <span class="radiobtn danamon"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="cimb" value="cimbva">
                                <span class="radiobtn cimb"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="atm-bersama" value="atmbersamava">
                                <span class="radiobtn atm-bersama"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="keb-Hana" value="hanabankva">
                                <span class="radiobtn keb-Hana"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="permata" value="permatabankva">
                                <span class="radiobtn permata"></span>
                            </label>
                            
                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="indodana" value="indodana" data-toggle="modal" data-target="#infoIndodana">
                                <span class="radiobtn indodana"></span>
                            </label>

                            <label class="checkBank">
                                <input type="radio" name="pay_bank" id="banktransfer" value="banktransfer">
                                <span class="radiobtn bank_transfer"></span>
                            </label>
                            
                        
                        <!--
                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="cimb" value="cimb">
                            <span class="radiobtn cimb"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="permata" value="permata">
                            <span class="radiobtn permata"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="bii" value="bii">
                            <span class="radiobtn bii"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="jcb" value="jcb">
                            <span class="radiobtn jcb"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="keb-Hana" value="keb-Hana">
                            <span class="radiobtn keb-Hana"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="atm-bersama" value="atm-bersama">
                            <span class="radiobtn atm-bersama"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="mastercard" value="mastercard">
                            <span class="radiobtn mastercard"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="visa" value="visa">
                            <span class="radiobtn visa"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="indomaret" value="indomaret">
                            <span class="radiobtn indomaret"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="alfamart" value="alfamart">
                            <span class="radiobtn alfamart"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="gopay" value="gopay">
                            <span class="radiobtn gopay"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="ovo" value="ovo">
                            <span class="radiobtn ovo"></span>
                        </label>

                        <label class="checkBank">
                            <input type="radio" name="pay_bank" id="doku" value="doku">
                            <span class="radiobtn doku"></span>
                        </label> -->
                    </div>
                </div>
            </div>
            
            <div class="section-promo container mt-4">
                <div class="form-group d-inline-block ml-3"> 
                    <label for="input-promo">Promo Code</label> 
                    <input type="text" class="form-control" id="input-promo" >
                </div>
                <button id="btn-apply-promo" class="btn btn-outline-dark"> Apply </button><br/>
                <p id="voucher-error" style="font-size: small;color: red;margin-left: 2em;display:none">
                    *Kode Voucher Tidak Ditemukan.
                </p>
                <p id="notes-voucher" style="display:none;font-size: small;margin-left: 2em;color: #212529;">
                    *Kalkulasi kode voucher akan diterapkan saat checkout 
                </p>
                
            </div>
            
            <div class="alert alert-primary container" role="alert" id="show-diskon-100" style="display:none;">
              Selamat anda mendapat potongan harga 100 ribu karena memiliki domain di qwords
            </div>
            
            <div class="section-total" id="total-pesanan">
                <div class="container">
                    <div class="px-3">
                        <h3 class="text-18 mb-4">Pesanan Anda</h3>
                        <div class="table-summary">
                            <table class="wrapp-total">
                                <tr class="t-body">
                                    <td>Paket</td>
                                    <td id="paket-name">Paket UKM</td>
                                </tr>
                                <tr class="t-body">
                                    <td>Domain</td>
                                    <td><span id="domain-show"></span></td>
                                </tr>
                                <tr class="t-body">
                                    <td>Template</td>
                                    <td id="chose-template"><img class="upload-img" src="#" alt="your image" /></td>
                                </tr>
                                <tr class="t-body">
                                    <td>Metode Pembayaran</td>
                                    <td><span id="payment-Method">bcava</span> </td>
                                </tr>
                                <tr class="t-body">
                                    <td>Biaya</td>
                                    <td>Rp. <span id="harga-paket">2700000</span></td>
                                </tr>
                                
                                <tr id="container_domain" class="t-body" style="display:none">
                                    <td>Biaya <span id="label-domain"> register </span> domain </td>
                                    <td>Rp. <span id="harga-domain">0</span></td>
                                </tr>
                                
                                <tr id="diskon-display" class="t-body" style="display:none">
                                    <td>Diskon</td>
                                    <td> 5%</td>
                                </tr>
                                
                                <tr class="t-body">
                                    <td>Diskon</td>
                                    <td id="harga-diskon"> 0</td>
                                </tr>
                                
                                
                                <tr class="t-body">
                                    <td>PPN</td>
                                    <td>Rp. <span id="ppn">270000</span></td>
                                </tr>

                                <tr class="t-body">
                                    <td><b>Total</b></td>
                                    <td><b><span id="total-harga">2700000</span><b></td>
                                </tr>
                                <tr class="t-body" id="tab-bank">
                                    <td class="bank_label"><span id="bankName">Silahkan klik detail tagihan setelah pesan</span></td>
                                    <td>
                                        <span class="bankRek default-bank" id="pilih-bca"></span>
                                        <span class="bankRek" id="pilih-mandiri">1310012210888 a/n QWORDS COMPANY INTERNATIONAL</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="btn-next-back">
                            <div class="btn back-step" id="backto-templates">Back</div>
                            <input type="submit" class="btn next-step disable-btn" id="nextto-konfirmasi" value="Pesan" disabled data-client="0">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- loading -->
        <div class="loading-pesan">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ripple.gif" alt="loading">
        </div>

        <!-----------------Konfirmasi Pembayaran section--------------------->
        <!-- <div class="section-pesan" id="konfirmasi-pembayaran-section">
            <div class="container">
                <h2 class="title-24 title-acc-blue text-center text-white">Konfirmasi Pembayaran</h2>
                <div class="card-confirm">
                    <div class="form-group row">
                        <div class="col-md-4 col-12">
                            <span class="title-input">Bank Tujuan</span>
                        </div>
                        <div class="col-md-8 col-12">
                            <select id="bank_name" class="form-control">
                                <option value="bca">PT.Qwords - Bank BCA</option>
                                <option value="mandiri">PT.Qwords - Bank MANDIRI</option>
                                <option value="danamon">PT.Qwords - Bank Danamon</option>
                                <option value="cimb">PT.Qwords - Bank CIMB</option>
                                <option value="permata">PT.Qwords - Bank Permata</option>
                                <option value="indomaret">PT.Qwords - Indomaret</option>
                                <option value="alfamart">PT.Qwords - Alfamart</option>
                                <option value="gopay">PT.Qwords - Go Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-12">
                            <span class="title-input">Sebesar</span>
                        </div>
                        <div class="col-md-8 col-12">
                            <input type="number" name="priceConfirm" id="price-confirm" class="form-control" placeholder="Masukkan Nominal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-12">
                            <span class="title-input">Nama Pemilik Rekening</span>
                        </div>
                        <div class="col-md-8 col-12">
                            <input type="text" name="rekName" id="rek-name" class="form-control" placeholder="Masukkan Nama Anda">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-12">
                            <span class="title-input">Catatan</span>
                        </div>
                        <div class="col-md-8 col-12">
                            <textarea id="other-info" class="form-control" placeholder="Masukkan Catatan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-12">
                            <span class="title-input">Bukti Bayar</span>
                        </div>
                        <div class="col-md-8 col-12">
                            <span id="proof-payment">
                                <input type="file" name="fileConfirm" id="fileConfirm" class="upload-files">
                                <img id="bukti-bayar" src="#" alt="your image" />
                            </span>
                        </div>
                    </div>
                </div>
                <div class="btn-next-back">
                    <button class="btn back-step" id="backto-metode">Back</button>
                    <button class="btn next-step btn-confirm" id="konfirmasi">Konfirmasi</button>
                </div>
            </div>
        </div> -->
    </form>
</section>

<!-- Modal -->
<div class="modal fade" id="infoIndodana" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Perhatian !</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        Untuk pengguna baru Indodana, diperlukan proses registrasi dan pengajuan limit kredit terlebih dahulu 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-mengerti" data-dismiss="modal">Saya Mengerti</button>
            <a href="https://www.indodana.id/"  class="btn btn-toindodana">Registrasi Sekarang</a>
        </div>
        </div>
    </div>
</div>
<?php
get_footer();