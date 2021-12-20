<?php
/* Template Name: Bandingkan paket */
get_header();
?>

<style>
 /* hide paket pilkada*/
 body > section.bandingkan-harga-section > div > div > div.main-wrappers.mt-5 > div > table > tbody > tr > td:nth-child(4) {
     display:none;
 }
</style>

        <!-----------------cover section--------------------->
        <section class="templates-banner cover">
                <div class="container fade-anm show-on-scroll">
                        <h2 class="title-section text-center anm-fade-right mb-0">Paket Website</h2>
                </div>
        </section>
    <!-----------------bandingkan harga section--------------------->

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
        // print_r($nama);
        // print_r($harga);
    ?>
    
    <section class="bandingkan-harga-section">
        <div class="wrap-list-pakets">
                <div class="container">
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
                                                                        PAKET ONLINE
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
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 150 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">84</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                                <td>
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 209 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">150</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                                <td>    
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 375 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">225</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                                <td>
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 542 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">375</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                                <td>
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 875 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">792</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Perpanjangan</th>
                                                                <td>
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;67&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                                                </td>
                                                                <td>
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;100&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                                                </td>
                                                                <td>
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;150&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                                                </td>
                                                                <td>
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;292&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                                                </td>
                                                                <td>
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

                        <div class="main-wrappers mt-5">
                                <div class="main">
                                        <table class="price-table">
                                                <tbody>
                                                        <tr>
                                                                <th class="headcol"></th>
                                                                <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">MADE FOR YOU & ALL YOUR NEEDS</small></td>
                                                                <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;">ADVANCED DESIGN BY OUR DESIGNERS</small></td>
                                                                <td class="price-table-popular"><small style="font-size: 12px; font-weight: 400;"> </small></td>
                                                        </tr>
                                                        <tr class="price-table-head">
                                                                <th class="headcol"></th>
                                                                <td>
                                                                        PAKET CUSTOM
                                                                </td>
                                                                <td>
                                                                        PAKET WEDDING
                                                                </td>
                                                                <td>
                                                                        PAKET PILKADA
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol"></th>
                                                                <td class="price">
                                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-customs.png" class="image-package d-block mx-auto mb-0" alt="image package">
                                                                </td>
                                                                <td class="price">
                                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-wedding.png" class="image-package d-block mx-auto mb-0" alt="image package">
                                                                </td>
                                                                <td class="price">
                                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/package-pilkada.jpg" class="image-package d-block mx-auto mb-0" alt="image package">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Jumlah Halaman</th>
                                                                <td>Sesuai Kebutuhan</td>
                                                                <td>10</td>
                                                                <td>10</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Email Profesional</th>
                                                                <td>Sesuai Kebutuhan</td>
                                                                <td>10</td>
                                                                <td>10</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Revisi Design</th>
                                                                <td>5x</td>
                                                                <td>3x</td>
                                                                <td>3x</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Kuota Update</th>
                                                                <td>5x/bulan</td>
                                                                <td>3x/bulan</td>
                                                                <td>3x/bulan</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Edit Gambar</th>
                                                                <td>Sesuai Halaman</td>
                                                                <td>10</td>
                                                                <td>10</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Pilihan Logo</th>
                                                                <td>5</td>
                                                                <td>3</td>
                                                                <td>3</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">SEO Basic</th>
                                                                <td>3 keyword</td>
                                                                <td>1 keyword</td>
                                                                <td>1 keyword</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Dual Bahasa</th>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td>ADDITIONAL</td>
                                                                <td>ADDITIONAL</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Portal Pembayaran</th>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-times"></i></td>
                                                                <td><i class="fas fa-times"></i></td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Ongkir Otomatis</th>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-times"></i></td>
                                                                <td><i class="fas fa-times"></i></td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Request Design</th>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-times"></i></td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Kalender Kegiatan</th>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-times"></i></td>
                                                                <td><i class="fas fa-check"></i></td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Disk Storage</th>
                                                                <td>Sesuai Kompleksitas</td>
                                                                <td>5GB SSD</td>
                                                                <td>5GB SSD</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">PHP Memory</th>
                                                                <td>Sesuai Kompleksitas</td>
                                                                <td>512 MB</td>
                                                                <td>512 MB</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">RAM</th>
                                                                <td>Sesuai Kompleksitas</td>
                                                                <td>1,5 GB</td>
                                                                <td>1,5 GB</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">CPU</th>
                                                                <td>Sesuai Kompleksitas</td>
                                                                <td>1,5 Core</td>
                                                                <td>1,5 Core</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Inodes</th>
                                                                <td>Sesuai Kompleksitas</td>
                                                                <td>80,000</td>
                                                                <td>80,000</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">FREE Domain</th>
                                                                <td><i class="fas fa-check"></i> .COM</td>
                                                                <td><i class="fas fa-check"></i> .WEDDING</td>
                                                                <td><i class="fas fa-check"></i> .COM</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">SSL</th>
                                                                <td>Sectigo Positive SSL</td>
                                                                <td>Sectigo Positive SSL</td>
                                                                <td>Sectigo Positive SSL</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Wordpress Admin</th>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-check"></i></td>
                                                                <td><i class="fas fa-check"></i></td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Web Panel</th>
                                                                <td>cPanel</td>
                                                                <td>cPanel</td>
                                                                <td>cPanel</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Hari Kerja</th>
                                                                <td>Sesuai Kompleksitas</td>
                                                                <td>±7 hari</td>
                                                                <td>±7 hari</td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Harga</th>
                                                                <td>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Mulai Dari Rp</small>&nbsp;<span class="price">15</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>
                                                                </td>
                                                                <td>
                                                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 6,5 juta</h3>-->
                                                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">4,5</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 542 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">375</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                                <td>
                                                                        <!--<h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 6,5 juta</h3>-->
                                                                        <!--<h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">4,5</span>&nbsp;<small style="font-size: 12px;">juta</small></h3>-->
                                                                        <h3 class="" style="text-decoration: line-through;font-size: 17px;">Rp 542 ribu</h3>
                                                                        <h3 class="price-paket"><small style="font-size: 12px;">Rp</small>&nbsp;<span class="price">375</span>&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h3>
                                                                        <h3><small style="font-size: 12px;">(minimal termin 1 tahun)</small></h3>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol">Perpanjangan</th>
                                                                <td>
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;6,5&nbsp;<small style="font-size: 12px;">juta</small></h4>
                                                                </td>
                                                                <td>
                                                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;1,6&nbsp;<small style="font-size: 12px;">juta</small></h4>-->
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;134&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                                                </td>
                                                                <td>
                                                                        <!--<h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;1,6&nbsp;<small style="font-size: 12px;">juta</small></h4>-->
                                                                        <h4 class="perpanjangan mb-0"><small style="font-size: 12px;">Rp</small>&nbsp;134&nbsp;<small style="font-size: 12px;">ribu / bulan</small></h4>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <th class="headcol"></th>
                                                                <td class="price">
                                                                        <a href="<?=home_url('/hubungi')?>" class="btn btn-pesan" data-pid="<?php echo $pid[3]; ?>" data="<?php echo $nama[3]; ?>" data-harga="<?php echo $harga[3] ?>">Pesan</a>
                                                                </td>
                                                                <td class="price">
                                                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[4]; ?>" data="<?php echo $nama[4]; ?>" data-harga="<?php echo $harga[4] ?>">Pesan</a>
                                                                </td>
                                                                <td class="price">
                                                                        <a href="<?=home_url('/pesan')?>" class="btn btn-pesan" data-pid="<?php echo $pid[2]; ?>" data="<?php echo $nama[2]; ?>" data-harga="<?php echo $harga[2] ?>">Pesan</a>
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
    </section>

    <!-----------------footer section--------------------->
<?php
    get_footer();