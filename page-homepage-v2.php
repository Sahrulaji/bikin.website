<?php
/* Template Name: Homepage v2 */
get_header();
?>  
    <!-----------------banner section (section 1)--------------------->
    <section id="banner">
        <div class="overlay-banner"></div>
        <div class="container header homepage">
            <div class="row cover-page align-items-center justify-content-center">
                <div class="col-md-8 col-12 header-left ">
                    <h1 class="promo-title text-center mb-0">BIKIN WEBSITE IMPIAN DENGAN MUDAH DISINI</h1>
                    <div class="d-block mt-md-5 mt-4 text-center">
                        <a href="<?=home_url('/template')?>" class="btn btn-common btn-mulai mb-0">Lihat Semua Template</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-----------------template section (Section 2)--------------------->
    <section id="reason">
        <div class="container">
            <h2 class="title-section text-center">Kenapa Harus di Bikin.Website</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img class="d-block w-100 p-0 " src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/img_responsive.png" alt="Responsive Design">
                    <h3 class="title-column">RESPONSIVE DESIGNS</h3>
                    <p class="text-center">Raihlah user experience yang baik
                        melalui desain website yang elegan
                        serta navigasi yang mudah.
                        Tampilan halaman terlihat keren
                        sekaligus responsif apabila diakses
                        dari smartphone, tablet, dsb.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img class="d-block w-100 p-0 " src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/img_online_catalog.png" alt="Online Catalog">
                    <h3 class="title-column">ONLINE CATALOG</h3>
                    <p class="text-center">Dengan fitur katalog online bagi
                        produk / jasa yang Anda sediakan,
                        memberikan wadah untuk secara
                        detail menjelaskan deskripsi maupun
                        informasi dari setiap produk / jasa
                        tersebut.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img class="d-block w-100 p-0 " src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/img_maintenance_website.png" alt="Maintenance website">
                    <h3 class="title-column">MAINTENANCE WEBSITE</h3>
                    <p class="text-center mb-2">FREE maintenance website setiap bulan*
                        selama 1 tahun penuh untuk perubahan
                        pada halaman website dan maintenance
                        lainnya.
                    </p>
                    <p class="text-center text-13"><span class="terms-condition">*</span>sesuai spesifikasi paket</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img class="d-block w-100 p-0 " src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/img_payment_gateway.png" alt="Payment Shipping Gateways">
                    <h3 class="title-column">PAYMENT & SHIPPING GATEWAYS</h3>
                    <p class="text-center mb-2">Fitur ini membuat customer / klien
                        Anda dapat melakukan konfirmasi
                        pembayaran serta melakukan
                        pengecekan ongkos kirim secara
                        otomatis tanpa harus menunggu
                        lebih lama.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <img class="d-block w-100 p-0 " src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/img_statistics.png" alt="Internal Statistics">
                    <h3 class="title-column same-high-title">INTERNAL STATISTICS</h3>
                    <p class="text-center mb-2">Terhubung dengan google analytics untuk
                        memantau data statistik website Anda,
                        sehingga memudahkan Anda dalam
                        monitoring traffic dan menentukan strategi
                        promosi / pemasaran.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img class="d-block w-100 p-0 " src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/img_integrated_marketplace.png" alt="Integrated Marketplaces">
                    <h3 class="title-column">INTEGRATED TO MARKETPLACES</h3>
                    <p class="text-center mb-2">Website dapat diintegrasikan dengan
                        marketplace lain seperti Tokopedia,
                        Bukalapak, Shopee, Lazada, dsb untuk
                        mempermudah customer / klien Anda
                        dalam melakukan pembelian / proses
                        pembayaran.
                    </p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- <div class="promo">
        <div class="container">
            <a href="https://bikin.website/promo-indodana/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/promo/banner.png" class="w-100" alt="promo indodana">
            </a>
        </div>
    </div> -->

    <!-----------------package section--------------------->
    <?php 
        function req_api($url,$arrayParam){
            
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
        
            $pid[] = $r->pid;
            $nama[] = $r->name;
            $harga[] = $pricing;
            $perpanjang[] = $pricing->annually;

        }
    ?>
    <section id="package-section">
        
        <div class="wrap-list-pakets">
            <div class="container">
                <h2 class="title-section text-center">Paket Populer</h2>
                <div class="main-wrappers">
                    <div class="main">
                        <table class="price-table">
                            <tbody>
                                <tr>
                                    <th class="headcol"></th>
                                    <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">Go Online Starter Pack</small></td>
                                    <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">For Entry Level Business</small></td>
                                    <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">Most Popular Package</small></td>
                                    <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">High Performance Cloud Hosting</small></td>
                                    <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">Integrated Payment & Shipping Gateways</small></td>
                                </tr>
                                <tr class="price-table-head">
                                    <th class="headcol"></th>
                                    <td>
                                        <a href="<?=home_url('/jasa-pembuatan-website-murah')?>" class="link-package"> PAKET ONLINE</a>
                                        
                                    </td>
                                    <td>
                                        PAKET ENTRY
                                    </td>
                                    <td>
                                        PAKET UKM
                                    </td>
                                    <td class="green-width">
                                        PAKET CORPORATE
                                    </td>
                                    <td class="green-width">
                                        PAKET ECOMMERCE
                                    </td>
                                </tr>
                                <tr>
                                    <th class="headcol"></th>
                                    <td class="price">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-online.jpg" class="image-package d-block mx-auto mb-0" alt="image package">
                                    </td>
                                    <td class="price">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-entry.jpg" class="image-package d-block mx-auto mb-0" alt="image package">
                                    </td>
                                    <td class="price">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-umkm.png" class="image-package d-block mx-auto mb-0" alt="image package">
                                    </td>
                                    <td class="price">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-corporate.png" class="image-package d-block mx-auto mb-0" alt="image package">
                                    </td>
                                    <td class="price">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-ecommerce.png" class="image-package d-block mx-auto mb-0" alt="image package">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th class="headcol">Jumlah Halaman</th>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>15</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Email Profesional</th>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>15</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Revisi Design</th>
                                    <td>1x</td>
                                    <td>1x</td>
                                    <td>2x</td>
                                    <td>3x</td>
                                    <td>5x</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Kuota Update</th>
                                    <td>1x/3bulan</td>
                                    <td>1x/bulan</td>
                                    <td>2x/bulan</td>
                                    <td>3x/bulan</td>
                                    <td>5x/bulan</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Edit Gambar</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td>5</td>
                                    <td>15</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Pilihan Logo</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <th class="headcol">SEO Basic</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td>1 keyword</td>
                                    <td>1 keyword</td>
                                    <td>3 keyword</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Dual Bahasa</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td>ADDITIONAL</td>
                                    <td>ADDITIONAL</td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">Portal Pembayaran</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">Ongkir Otomatis</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">Request Design</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">Kalender Kegiatan</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-times"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">Disk Storage</th>
                                    <td>1GB Hybrid</td>
                                    <td>2GB Hybrid</td>
                                    <td>2GB SSD</td>
                                    <td>5GB SSD</td>
                                    <td>5GB SSD</td>
                                </tr>
                                <tr>
                                    <th class="headcol">PHP Memory</th>
                                    <td>256 MB</td>
                                    <td>512 MB</td>
                                    <td>512 MB</td>
                                    <td>512 MB</td>
                                    <td>512 MB</td>
                                </tr>
                                <tr>
                                    <th class="headcol">RAM</th>
                                    <td>512 MB</td>
                                    <td>512 MB</td>
                                    <td>1 GB</td>
                                    <td>1,5 GB</td>
                                    <td>1,5 GB</td>
                                </tr>
                                <tr>
                                    <th class="headcol">CPU</th>
                                    <td>0,5 Core</td>
                                    <td>0,5 Core</td>
                                    <td>1 Core</td>
                                    <td>1,5 Core</td>
                                    <td>1,5 Core</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Inodes</th>
                                    <td>30,000</td>
                                    <td>30,000</td>
                                    <td>40,000</td>
                                    <td>80,000</td>
                                    <td>80,000</td>
                                </tr>
                                <tr>
                                    <th class="headcol">FREE Domain .COM</th>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">SSL</th>
                                    <td>Let's Encrypt SSL</td>
                                    <td>Let's Encrypt SSL</td>
                                    <td>Sectigo Positive SSL</td>
                                    <td>Sectigo Positive SSL</td>
                                    <td>Sectigo Positive SSL</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Wordpress Admin</th>
                                    <td><i class="fas fa-times"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th class="headcol">Web Panel</th>
                                    <td>Direct Admin</td>
                                    <td>Direct Admin</td>
                                    <td>cPanel</td>
                                    <td>cPanel</td>
                                    <td>cPanel</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Hari Kerja</th>
                                    <td>±2 hari</td>
                                    <td>±3 hari</td>
                                    <td>±3 hari</td>
                                    <td>±7 hari</td>
                                    <td>±14 hari</td>
                                </tr>
                                <tr>
                                    <th class="headcol">Harga</th>
                                    <td>
                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 1,8 juta</h3>-->
                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">1</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 150 ribu</h3>
                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">84</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                    </td>
                                    <td>
                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 2,5 juta</h3>-->
                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">1,8</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 209 ribu</h3>
                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">150</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                    </td>
                                    <td>
                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 4,5 juta</h3>-->
                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">2,7</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 375 ribu</h3>
                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">225</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                    </td>
                                    <td>
                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 6,5 juta</h3>-->
                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">4,5</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 542 ribu</h3>
                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">375</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                    </td>
                                    <td>
                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 10,5 juta</h3>-->
                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Mulai Rp</small>&nbsp;<span class="price">9,5</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 875 ribu</h3>
                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">792</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="headcol">Perpanjangan</th>
                                    <td>
                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;800&nbsp;<small style="font-size: 12px;">ribu</small></h4>-->
                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;67&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                    </td>
                                    <td>
                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;1,2&nbsp;<small style="font-size: 12px;">juta</small></h4>-->
                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;100&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                    </td>
                                    <td>
                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;1,8&nbsp;<small style="font-size: 12px;">juta</small></h4>-->
                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;150&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                    </td>
                                    <td>
                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;3,5&nbsp;<small style="font-size: 12px;">juta</small></h4>-->
                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;292&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                    </td>
                                    <td>
                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;6,5&nbsp;<small style="font-size: 12px;">juta</small></h4>-->
                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;542&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="headcol"></th>
                                    <td class="price">
                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[1]; ?>" data="<?php echo $nama[1]; ?>" data-harga="<?php echo $harga[1] ?>">Pesan</a>
                                    </td>
                                    <td class="price">
                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[5]; ?>" data="<?php echo $nama[5]; ?>" data-harga="<?php echo $harga[5] ?>">Pesan</a>
                                    </td>
                                    <td class="price">
                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[0]; ?>" data="<?php echo $nama[0]; ?>" data-harga="<?php echo $harga[0] ?>">Pesan</a>
                                    </td>
                                    <td class="price">
                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[6]; ?>" data="<?php echo $nama[6]; ?>" data-harga="<?php echo $harga[6] ?>">Pesan</a>
                                    </td>
                                    <td class="price">
                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[7]; ?>" data="<?php echo $nama[7]; ?>" data-harga="<?php echo $harga[7] ?>">Pesan</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="wrapp-additional-fitur d-block mx-auto">
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
        </div>
        <div class="container mt-md-70 mt-mob-42">
            <div class="d-md-flex d-block justify-content-center align-items-center">
                <h2 class="title-section text-center mb-md-0">Kesulitan menentukan paket atau custom website?</h2>
                <a href="<?=home_url('/hubungi')?>" class="btn btn-hub ml-md-3">GRATIS Konsultasi</a>
                <!-- <a href="<?=home_url('/bandingkan-paket')?>" class="btn btn-hub ml-md-3 mt-md-0 mt-3">Bandingkan Paket</a> -->
            </div>
        </div>
    </section>
    <div class="container">
        <hr class="divider">
    </div>
    <!-----------------partner section--------------------->
    <section id="partner">
        <div class="container ">
            <h2 class="title-section text-center">Partner Kami</h2>
            <?php 
                // echo do_shortcode('[logo-slider cat="partner"]'); 
            ?>
            <div class="partner-wrapper">
                <ul class="partner-list">
                    <li>
                        <a href="https://www.xendit.co/id/">
                            <img class="lgx-logo-img lazyloaded" src="<?php echo get_stylesheet_directory_uri(); ?>/img/xendit.png" data-src="https://bikin.website/wp-content/uploads/2020/09/Xendit.png" alt="" title="Xendit">
                            <h6 class="logo-company-name">Xendit</h6>
                        </a>
                    </li>
                    <li>
                        <a href="https://id.jooble.org/">
                            <img class="lgx-logo-img lazyloaded" src="<?php echo get_stylesheet_directory_uri(); ?>/img/jooble.png" data-src="https://bikin.website/wp-content/uploads/2020/09/Logo-Jooble.png" alt="" title="Jooble">
                            <h6 class="logo-company-name">Jooble</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php
get_footer();