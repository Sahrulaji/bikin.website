<?php
/* Template Name: Pesan Thanks */
get_header();
?>
<section class="thanks"> 
    <div class="container">
        <div class="thanks-container">
            <div class="wrapper-content text-center">
                <h2 class="thanks-text">Terimakasih!</h2>
                <h3 id="va_section"> Nomor VA : <span id="no_va">-</span></h3>
                <p class="thanks-content">Pesanan anda telah terkirim, kami akan segera menghubungi anda.</p>
                    
                     <a 
                    class="btn btn-warning" 
                    style="color: white;margin-bottom: 1em;cursor: pointer;background: #1C188F;"
                    href="https://portal.bikin.website/viewinvoice.php?id=<?=$_GET["invid"];?>"
                    > Detail Tagihan </a><br/>
                <div class="icon-thanks">
                    <i class="far fa-envelope"></i>
                    <span class="line-envelop"></span>
                </div>
                <a 
                    class="btn btn-warning" 
                    style="color: white;margin-bottom: 1em;cursor: pointer;background: #1C188F;"
                    href="https://api.whatsapp.com/send?phone=+628112635788&text=Halo, saya ingin konfirmasi pembayaran"
                    > Konfirmasi Pembayaran </a><br/>
                <a href="<?=home_url('/')?>" class="back-home"><i class="fas fa-long-arrow-alt-left"></i> Kembali Ke halaman awal</a>
            </div>
        </div>
    </div>
</section>

<script>
    let searchParams = new URLSearchParams(window.location.search)
    var invocieid = searchParams.get('invid')
    if (Boolean(invocieid)){
        fetch('https://portal.bikin.website/apis/whmcs-api/getVA.php?invoiceid=' + invocieid)
            .then(r => r.json())
            .then(r => {
                var no_va = r[r.payment]
                
                if (r.payment !== 'banktransfer' && Boolean(no_va)){
                    document.querySelector('#va_section').style.display = 'block'
                    document.querySelector('#no_va').innerText = no_va
                } else {
                    document.querySelector('#va_section').style.display = 'none'
                }
            })
    }
</script>

<?php
get_footer();