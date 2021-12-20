window.domaintype = "register"
window.value_note = ""

$('#home-tab').click(function(){
    window.domaintype = "register"
})

$('#profile-tab').click(function(){
    window.domaintype =null
})

$('#transfer-tab').click(function(){
    window.domaintype = "transfer"
})

$(document).ready(function(){
    
    setTimeout(function(){
        // if ($('#pilih-template').is(':visible')){
        //     $('#cari-domain').show()
        // } else {
        //     $('#cari-domain').hide()
        // }
        

        fetch('https://portal.bikin.website/apis/getExtensions.bak.php')
            .then(r => r.json())
            .then(r => {
                
                r.forEach(d => {
                    $('.input-tld').append(`<option data-register="${d.register}" data-transfer="${d.transfer}" data-renew="${d.renew}" value="${d.tld}"> ${d.tld} </option>`)
                })
                $_('.input-tld').select2({theme: "bootstrap"});
            })
        
        
        const urlParams = new URLSearchParams(window.location.search);
        var debug = urlParams.get('debug');
        
        if (Boolean(debug)){
            $('#suggest-search').show();
        }
        $('#input-cari-domain-2').on('input', _.debounce(requestSuggest, 650))
        
    }, 1000)
    
  setTimeout(function() {
    var urlParams = new URLSearchParams(window.location.search);
    var promocode = urlParams.get('promocode');
    
    try {
        
        if (Boolean(promocode)) {
            $('#input-promo').val(promocode.toUpperCase())
            // $('#input-promo').prop('disabled', true)
            // $('#btn-apply-promo').prop('disabled', true)
        }
        
    } catch(err) {
        
    }
    
      
    var isPaket = sessionStorage.getItem('Paket');
    var isHarga = sessionStorage.getItem('Harga');
    var discount = sessionStorage.getItem("discount");
    var outputHarga = parseInt(isHarga).toLocaleString();
    
    isHarga = calculateDiskon(isHarga);
    
    
    if (window.domaintype == 'register'){
        var price_register =  $('#input-tld-register :selected').data('register')
        
        if (['.com', '.id'].includes($('#input-tld-register').val())){
            price_register = 0
        }
        
        isHarga = isHarga + parseInt(price_register)
    } else if (window.domaintype == 'transfer') {
        var price_transfer = $('#input-tld-transfer :selected').data('transfer')
        isHarga = isHarga + parseInt(price_transfer)
    }
    
    var ppn = 10/100 * isHarga;
    var ppnCurrency = parseInt(ppn).toLocaleString();
    var totHar = Number(isHarga) + ppn;
    
    if (Boolean(discount)){
        totHar = totHar - Number(discount)
    }
    
    
    
    
    var totalHarga =  parseInt(totHar).toLocaleString();
    // NOTES : disable ispaket
    //   if (isPaket){
      if (false){
        // $('.wrapper-step-indicator #step-template').addClass('completed-step');
        $('.wrapper-step-indicator #step-domain').addClass('completed-step');
        $('#package-section.section-pesan').fadeOut();
        setTimeout(function () {
          $('#cari-domain.section-pesan').fadeIn();
        }, 300);
        // Pesanan anda
        $("#paket-name").text('Paket ' + isPaket);
        $("#harga-paket").text(outputHarga + ' ,-');
        $("#ppn").text(ppnCurrency + ' ,-');
        $("#total-harga").text( 'Rp. '+ totalHarga + ' ,-');
        $("#harga-diskon").text('Rp. '+ Number(discount).toLocaleString() + ' ,-');
      }
      
  },10);

  //pemesanan paket
  $("#package-section .packages-wrapper .btn-pesan").click(function(paket){
    paket.preventDefault();
    var Paket = $(this).attr("data");
    var Harga = $(this).attr("data-harga");
    var pid = $(this).attr("data-pid");
    var promocode = $(this).attr("data-promocode");
    var discount = $(this).attr("data-discount");
    window.pid = pid 
    
    if (Paket == 'Paket Website Instant - Custom'){
        location.href = 'https://bikin.website/hubungi'
        return
    }
    
    if (!Boolean(discount)){
        discount = 0
    }
    
    var outputHarga = parseInt(Harga).toLocaleString();
    
    var calcHarga = calculateDiskon(Number(Harga));
    calcHarga = calcHarga - parseInt(discount);
    
    if (window.domaintype == 'register'){
        var price_register =  $('#input-tld-register :selected').data('register')
        
        if (['.com', '.id'].includes($('#input-tld-register').val())){
            price_register = 0
        }
        
        calcHarga = calcHarga + parseInt(price_register)
    } else if (window.domaintype == 'transfer') {
        var price_transfer = $('#input-tld-transfer :selected').data('transfer')
        calcHarga = calcHarga + parseInt(price_transfer)
    }
    
    var ppn = 10/100 * calcHarga;
    var totHar = calcHarga + ppn;
    
    var ppnCurrency = parseInt(ppn).toLocaleString();
    var totalHarga =  parseInt(totHar).toLocaleString();
    
    
    sessionStorage.setItem('discount', discount);
    sessionStorage.setItem('promocode', promocode);
    if (Boolean(promocode)){
        $('#input-promo').val(promocode)
        // $('#btn-apply-promo').prop('disabled', true)
        // $('#input-promo').prop('disabled', true)
    } else {
        $('#input-promo').val('')
        $('#btn-apply-promo').prop('disabled', false)
        $('#input-promo').prop('disabled', false)
    }
    
    sessionStorage.setItem('pid', pid);
    sessionStorage.setItem('Paket', Paket);
    sessionStorage.setItem('Harga', Harga);
    $('.wrapper-step-indicator #step-domain').addClass('completed-step');
    $('#package-section.section-pesan').fadeOut();
    setTimeout(function () {
      // $('#pilih-template.section-pesan').fadeIn();
      $('#cari-domain').fadeIn();
    }, 300);
    
    

    // Pesanan anda
    $("#paket-name").text('Paket ' + Paket);
    $("#harga-paket").text(outputHarga + ' ,-');
    $("#harga-diskon").text('Rp. '+ Number(discount).toLocaleString() + ' ,-');
    $("#ppn").text(ppnCurrency + ' ,-');
    

    
    $("#total-harga").text('Rp. '+ totalHarga + ' ,-');
    
  });
  
  function calculateHarga(){
    var Paket = $(this).attr("data");
    var Harga = $(this).attr("data-harga");
    var pid = $(this).attr("data-pid");
    var promocode = $(this).attr("data-promocode");
    var discount = $(this).attr("data-discount");
    window.pid = pid 
    
    if (!Boolean(discount)){
        discount = 0
    }
    
    var outputHarga = parseInt(Harga).toLocaleString();
    
    var calcHarga = calculateDiskon(Number(Harga));
    calcHarga = calcHarga - parseInt(discount);
    
    if (window.domaintype == 'register'){
        var price_register =  $('#input-tld-register :selected').data('register')
        
        if (['.com', '.id'].includes($('#input-tld-register').val())){
            price_register = 0
        }
        
        calcHarga = calcHarga + parseInt(price_register)
    } else if (window.domaintype == 'transfer') {
        var price_transfer = $('#input-tld-transfer :selected').data('transfer')
        calcHarga = calcHarga + parseInt(price_transfer)
    }
    
    var ppn = 10/100 * calcHarga;
    var totHar = calcHarga + ppn;
    var ppnCurrency = parseInt(ppn).toLocaleString();
    var totalHarga =  parseInt(totHar).toLocaleString();
    
    return totalHarga
  }

  //pilih domain
  $('#backto-package').click(function(){
    $('.wrapper-step-indicator #step-domain').removeClass('completed-step');
    $('#cari-domain.section-pesan').fadeOut();
    setTimeout(function () {
      $('#package-section.section-pesan').fadeIn();
    }, 300);
    
  });
  
  $('#nextto-template').click(function(){
    $('.wrapper-step-indicator #step-template').addClass('completed-step');
    $('#cari-domain.section-pesan').fadeOut();
    setTimeout(function () {
      $('#pilih-template.section-pesan').fadeIn();
    }, 300);
    
    // $('#cari-domain').hide()
    
  });

  // Memilih Template
  $(".templates-list #listing .chose-btn").click(function(temp){
    const avail_domain = $('[data-available]').text()
    if (avail_domain !== 'tersedia'){
        if (!Boolean(value_note)){
            alert('Domain tidak tersedia atau input domain kosong')
            return false 
        }
    }
    
    temp.preventDefault();
    var dataTemplate = $(this).attr("data-template");
    
    sessionStorage.setItem('templateDivi', dataTemplate);
    sessionStorage.removeItem("templateDesignerChoice");
    sessionStorage.removeItem("templateInputURL");
    sessionStorage.removeItem("urlImg");

    $("#chose-template").text(sessionStorage.getItem('templateDivi') + '/ sample');
    $('.wrapper-step-indicator #step-metode').addClass('completed-step');
    $('#pilih-template.section-pesan').fadeOut();
    setTimeout(function () {
      $('#metode-pembayaran-section.section-pesan').fadeIn();
      $("#nextto-metode-pembayaran").prop("disabled", false);
      $("#nextto-metode-pembayaran").removeClass("disable-btn");
    }, 300);
    
  });

  $("#inputURL").keyup(function(){
    var inputURL = $("#inputURL").val();
    if( $("#inputURL").val().length === 0 ) {
      $("#nextto-metode-pembayaran").prop("disabled", true);
      $("#nextto-metode-pembayaran").addClass("disable-btn");
    } else {
      sessionStorage.setItem("templateInputURL", inputURL);
      sessionStorage.removeItem("templateDivi");
      sessionStorage.removeItem("templateDesignerChoice");
      sessionStorage.removeItem("DesignerChoices");
      sessionStorage.removeItem("imgRef");
      sessionStorage.removeItem("urlImg");
      $('#inputDesigner').prop('checked', false);
      $("#chose-template").text(sessionStorage.getItem('templateInputURL'));

      $("#fileToUpload").val("");
      $('.upload-img').removeClass('haveImage');
      $('.upload-img').attr('src', '');
      urlValidation();
    }
  });

  $('#nextto-metode-pembayaran').click(function(){
    $('.wrapper-step-indicator #step-metode').addClass('completed-step');
    $('#pilih-template.section-pesan').fadeOut();
    setTimeout(function () {
      $('#metode-pembayaran-section.section-pesan').fadeIn();
    }, 300);
    
    // $('#cari-domain').hide()
  });

  $("#inputDesigner").change(function() {
    if($(this).prop('checked')) {
      sessionStorage.setItem("templateDesignerChoice", "1");
      sessionStorage.setItem("DesignerChoices", "Template By Designer");
      sessionStorage.removeItem("templateInputURL");
      sessionStorage.removeItem("templateDivi");
      sessionStorage.removeItem("imgRef");
      sessionStorage.removeItem("urlImg");
      $("#inputURL").val("");
      $("#chose-template").text(sessionStorage.getItem('DesignerChoices'));

      $("#fileToUpload").val("");
      $('.upload-img').removeClass('haveImage');
      $('.upload-img').attr('src', '');
      $("#nextto-metode-pembayaran").prop("disabled", false);
      $("#nextto-metode-pembayaran").removeClass("disable-btn");
    } else {
      sessionStorage.removeItem("templateDesignerChoice");
      $("#nextto-metode-pembayaran").prop("disabled", true);
      $("#nextto-metode-pembayaran").addClass("disable-btn");
    }
  });

  $('#backto-domain').click(function(){
    $('.wrapper-step-indicator #step-template').removeClass('completed-step');
    $('#pilih-template.section-pesan').fadeOut();
    setTimeout(function () {
      $('#cari-domain.section-pesan').fadeIn();
    }, 300);
    
    // $('#cari-domain').hide()
  });

  $( "#tabs-package" ).tabs();
  $('.templates-list .templates').addClass('col-md-4 col-sm-6')
  
  //******FILTER FUNCTION******//
  loadMore();
  $('.category_template').click(function () {
    var category = $(this).attr('id');
    $('.templates-list .templates').addClass('hide');
    
    setTimeout(function () {
      $('.templates-list .templates').hide();
    }, 300);
    setTimeout(function () {
      $('.templates-list .templates.category-' + category).removeClass('hide');
      $('.templates-list .templates.category-' + category).show();
      $('.load-more-button').hide();
    }, 300)
  })

  $(".category_template#semua").click(function(){
    $('.templates-list .templates').removeClass('hide');
    
    setTimeout(function () {
      // $('.templates-list .templates').show();
      $('.load-more-button').show(); 
      loadMore();
    }, 300);
  });

  $('#myInput').blur(function(){
    if( $(this).val().length === 0 ) {
      $(".category_template#semua").trigger( "click" );
      $('.load-more-button').show();
    }
  });
  $('#myInput').click(function(){
    $(".category_template#semua").trigger( "click" );
    setTimeout(function () {
      $('.load-more-button').hide();
    }, 300);
  });

  $(".wrapper-sidenav .category_template").click(function() {
    $(this).addClass('selected').siblings().removeClass('selected');
  });

  // metode pembayaran
    $('#login-btn').click(function(){
      loginBtn();
      return false;
    })
    $('#register-btn').click(function(){
      regBtn();
      return false;
    })

    var dataClient = localStorage.getItem('id');
    if (localStorage.getItem("id") === null) {
      $(".wrap-billing").hide();
    } else {
      $(".wrap-billing").show();
      $(".wrap-form-metode").hide();
      $("#inputNama").val(localStorage.getItem("nama"));
      $("#inputMail").val(localStorage.getItem("email"));
      $("#inputPerusahaan").val(localStorage.getItem("perusahaan"));
      $("#inputAlamat").val(localStorage.getItem("alamat"));
      $("#inputKota").val(localStorage.getItem("kota"));
      $("#inputPostCode").val(localStorage.getItem("kode_pos"));
      $("#nextto-konfirmasi").prop("disabled", false);
      $("#nextto-konfirmasi").removeClass("disable-btn");
      $('#nextto-konfirmasi').attr('data-client', dataClient);
    }
    // nextto-konfirmasi
    $("#nextto-konfirmasi").click(function(daftar){
      var pilihBank = $('input[name="pay_bank"]:checked').val();
      localStorage.setItem('pilihBank', pilihBank);
      // $('.wrapper-step-indicator #step-konfirmasi').addClass('completed-step');
      // $('#metode-pembayaran-section.section-pesan').fadeOut();
      // setTimeout(function () {
      //   $('#konfirmasi-pembayaran-section.section-pesan').fadeIn();
      // }, 300);
    });

    // pilih bank
    $('input[name="pay_bank"]').change(function() {
      var payMet = $(this).val();
      
      var payMetLabel = "Silahkan klik detail tagihan setelah pesan."
      
      if (payMet == "banktransfer"){
          payMetLabel = "BCA : 503-5778-770 a/n PT Qwords Company International <br/> Mandiri : 1310012210888 a/n QWORDS COMPANY INTERNATIONAL"
      }
      
      $("#payment-Method").text(payMet);
      $("#tab-bank").show();
      $("#bankName").html(payMetLabel);
      $('.bankRek').hide();
      $('#pilih-'+payMet).show();
    });

    //backto pilih template
    $('#backto-templates').click(function(){
      $('.wrapper-step-indicator #step-metode').removeClass('completed-step');
      $('#metode-pembayaran-section.section-pesan').fadeOut();
      setTimeout(function () {
        $('#pilih-template.section-pesan').fadeIn();
      }, 300);
    });
  // Konfirmasi Pembayaran
    // var selectedBank = $('#bank_name').find(":selected").text();
    // $('#konfirmasi').click(function(){
    //   sessionStorage.setItem('confirmBank', selectedBank);
    //   sessionStorage.setItem('confirmPrice', $("#price-confirm").val());
    //   sessionStorage.setItem('confirmRek', $("#rek-name").val());
    //   sessionStorage.setItem('confirmCatatan', $("#other-info").val());
    // });
    // $("#fileConfirm").change(function() {
    //   readBuktiBayar(this);
    //   $('#bukti-bayar').addClass('haveImage');
    // });
    // $("#backto-metode").click(function(){
    //   $('.wrapper-step-indicator #step-konfirmasi').removeClass('completed-step');
    //   $('#konfirmasi-pembayaran-section.section-pesan').fadeOut();
    //   setTimeout(function () {
    //     $('#metode-pembayaran-section.section-pesan').fadeIn();
    //   }, 300);
    // });
});

// url validation
function urlValidation() {
  var url = $('#inputURL').val();
  url_validate = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
  if(!url_validate.test(url)){
    $('.url-error').fadeIn();
  }
  else{
    $('.url-error').fadeOut();
    $("#nextto-metode-pembayaran").prop("disabled", false);
    $("#nextto-metode-pembayaran").removeClass("disable-btn");
  }
}

//login
function loginBtn(){
  const win = window.open('https://portal.bikin.website/order-login.php','popUpWindow','height=500,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
  return false;
}

//register
function regBtn(){
  const dow = window.open('https://portal.bikin.website/register.php?rdr=order','popUpWindow','height=500,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
  return false;
}

function requestReload(val){
    console.log(decodeURIComponent(val));
    // window.location.reload()
    var dataClient = localStorage.getItem('id');
    if (localStorage.getItem("id") === null) {
      $(".wrap-billing").hide();
    } else {
      $(".wrap-billing").show();
      $(".wrap-form-metode").hide();
      $("#inputNama").val(localStorage.getItem("nama"));
      $("#inputMail").val(localStorage.getItem("email"));
      $("#inputPerusahaan").val(localStorage.getItem("perusahaan"));
      $("#inputAlamat").val(localStorage.getItem("alamat"));
      $("#inputKota").val(localStorage.getItem("kota"));
      $("#inputPostCode").val(localStorage.getItem("kode_pos"));
      $("#nextto-konfirmasi").prop("disabled", false);
      $("#nextto-konfirmasi").removeClass("disable-btn");
      $('#nextto-konfirmasi').attr('data-client', dataClient);
    }     
}

function readBuktiBayar(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#bukti-bayar').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

// Sccroll filter
(function($){
  $(window).on("load",function(){
    $(".content").mCustomScrollbar({
      theme:"dark",
      autoHideScrollbar: true,
      moveDragger:true,
      axis:"x"
    });
    
    $("#tabs-package>.container").mCustomScrollbar({
      theme:"dark",
      autoHideScrollbar: true,
      moveDragger:true,
      axis:"x"
    });
  });
})(jQuery);

// Pagination
function loadMore() {
  var num = $("#listing").find("li").length;
  var i = num;

  if(i<=6){
      $(".load-more-button button").hide();
  }
  else {
      $(".load-more-button button").show();
  }

  $("li.templates").slice(0, 6).show();
  $(".load-more-button button").on('click', function (e) {
      e.preventDefault();
      $("li.templates:hidden").slice(0, 6).slideDown();
      if ($("li.templates:hidden").length == 0) {
          $(".load-more-button button").fadeOut('slow');
      }
      // $('html,body').animate({
      //     scrollTop: $(this).offset().top
      // }, 1500);
  });
}

// Search
function mySearch() {
  var input, filter, ul, li, a, i, txtValue;
  var tombol = document.getElementById('semua');
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("listing");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "list-item";   
      }
      else {
        li[i].style.display = "none";
      }
  }
}

//animation page
  $(document).ready(function(){
    $('.section-pesan, .pesan-banner').addClass('is-visible');
  });

// upload image
function readImgReferensi(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var urlOrigin   = window.location.origin;
    reader.onload = function(e) {
      // sessionStorage.setItem("imgRef", e.target.result);
      $("#chose-template").text('').append('<img class="upload-img haveImage" src="#" alt="your image" />');
      $('.upload-img').on("error", function() { 
        $(this).attr('src', urlOrigin+'/wp-content/themes/twentynineteen-child/img/pdf.png'); 
      });
      setTimeout(function(){
        $('.upload-img').attr('src', e.target.result);
      }, 500)
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}
$(document).ready(function (e){
  $("#fileToUpload").change(function() {
    readImgReferensi(this);
    $('.upload-img').addClass('haveImage');
    $('#inputDesigner').prop('checked', false);
    $("#inputURL").val("");
    sessionStorage.removeItem("templateDivi");

    $("#nextto-metode-pembayaran").prop("disabled", false);
    $("#nextto-metode-pembayaran").removeClass("disable-btn");
  });
  $('#btn-apply-promo').click(function(e){
      e.preventDefault()
      $('#notes-voucher').show()
      var kode_promo =  $('#input-promo').val()
      var pid = sessionStorage.getItem("pid");
            
      if (["BIKINWEBYUK","GOBIKINWEB"].includes(kode_promo) && ["6","1"].includes(String(pid)) ) {
          $('#input-promo').prop('disabled', true)
          alert('Kode Promo Terpasang')
          
          var current_harga = $('#total-harga').text()
          window.lastPrice = current_harga
          
          current_harga = current_harga.replaceAll(',','')
          var calc_harga = calculateDiskon(parseInt(current_harga))
          
          $('#total-harga').text(parseInt(calc_harga).toLocaleString())
          
      } else {
          $('#total-harga').text(window.lastPrice)
          if (kode_promo !== "") {
            // $('#voucher-error').show()
          }
      }
  })
  $("#myform").on('submit',(function(e){
    e.preventDefault();
    //postImage
    $.ajax({
      url: "https://portal.bikin.website/apis/upload.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false, 
      cache: false,
      processData:false,
      success: function(data){
        console.log(data,'aep')
        sessionStorage.setItem('urlImg', JSON.stringify(data,'aep'));
        sessionStorage.removeItem("templateDivi");
        sessionStorage.removeItem("templateDesignerChoice");
        sessionStorage.removeItem("DesignerChoices");
        sessionStorage.removeItem("templateInputURL");
      },
      error: function(){}        
    });
    $('.loading-pesan').addClass('klik-kirim')
    setTimeout(function(){
      // checkout
      var pid = sessionStorage.getItem("pid");
      var clientid = localStorage.getItem("id");
      var template = sessionStorage.getItem("templateDivi");
      var linkRef = sessionStorage.getItem("templateInputURL");
      var imgkRef = sessionStorage.getItem("urlImg");
      var DesignerChoice = sessionStorage.getItem("templateDesignerChoice");
      var url = "https://bikin.website/thanks-page/"; 
      var url_invoice = "https://portal.bikin.website/viewinvoice.php?id="
      var domain_ = $('#input-cari-domain-2').val() + $('#input-tld-register').val()
      
      const urlParams = new URLSearchParams(window.location.search);
      var debug = urlParams.get('debug');
      var pilihBank = $('input[name="pay_bank"]:checked').val();
      var promocode = $('#input-promo').val()
      
      if (!Boolean(promocode)){
          promocode = sessionStorage.getItem("promocode");
      }
      

      if (Boolean(value_note)){
          if (value_note == "transfer domain default") {
            domain_ =  $('#input-transfer-domain-3').val() + $('#input-tld-transfer').val()
          } else {
            domain_ =  $('#input-transfer-domain-2').val()
          }
      }
      
      $.ajax({
        type: 'POST',
        url: "https://portal.bikin.website/apis/whmcs-api/checkout.php",
        data: JSON.stringify({
          "pid":pid,
          "type":"json",
          "promocode":promocode,
          "paymentmethod":pilihBank,
          "clientid":clientid,
          "domain" : domain_,
          "notes" : value_note,
          "domaintype" : window.domaintype,
          "freemyid": $('#free-my-id').val(),
          "customfield":{
            "Domain":" ",
            "Template":template,
            "Link Referensi":linkRef,
            "Image Referensi":imgkRef,
            "Designer Choice":DesignerChoice
          }
        }),
        dataType: 'json',
        success: function(data){
            
          console.log(data,'cek');
          const bank = localStorage.getItem('pilihBank')

          if (bank == 'indodana'){
             sessionStorage.clear();
             localStorage.clear();
             $(location).attr('href',url_invoice + data.data.invoiceid);
             
             return false
          }
           
          sessionStorage.clear();
          localStorage.clear();
          $(location).attr('href',url + '?invid=' + data.data.invoiceid);
        }
      });
    }, 1500)
  }));
});

/* 
    @param {int} price 
*/
function calculateDiskon(price){
    var promocode = $('#input-promo').val() // side-effect :(
    var pid = sessionStorage.getItem("pid");
    console.log(promocode)
    
    if (!Boolean(pid)){
        pid = window.pid
    }

    if (["BIKINWEBYUK","GOBIKINWEB"].includes(promocode) && ["6","1"].includes(String(pid))){
        var diskon, calc_price;
        diskon = price * (5/100);
        calc_price = price - diskon;
        
        $('#diskon-display').show() // side-effect :(
        $('#diskon-display').find('td:last').text("- Rp " + parseInt(diskon).toLocaleString() + " ,-")
        $('#voucher-error').hide()
        return calc_price;
    } else {
        $('#diskon-display').hide() // side-effect :(
        if (promocode !== "") {
            // $('#voucher-error').show()
        }
        return price;
    }
}

$('#input-promo').on('input', function(e){
    this.value = this.value.toUpperCase();
})


$('#btn-cari-domain').click(function(e){
    e.preventDefault()
    const domain = $('#input-cari-domain').val()
    
    if (!Boolean(domain)){
        alert('Domain tidak boleh kosong')
        return false
    }
    
    window.value_note = ""
    $('#search-result-transfer').hide()
    
    $('#search-result').show()
    $('[data-info]').text('pencarian...')
    $('[data-domain]').text('')
    $('[data-available]').text('')
    
    $.get('http://portal.bikin.website/apis/searchdomain.php?domain=' + domain, function(res) {
        $('[data-info]').text('Domain')
        $('[data-domain]').text(domain)
        
        if (res.data == "available") {
            $('#search-result').show()
            $('[data-available]').text('tersedia')
            $('#search-result p').removeAttr('style', 'color:red;')
            $('#domain-show').text(domain)
            $('#cari-domain #nextto-template').prop("disabled", false);
            $('#cari-domain #nextto-template').removeClass("disable-btn");
        } else {
            $('[data-available]').html('tidak tersedia.</br> Silahkan cari nama domain lain.')
            $('#search-result p').attr('style', 'color:red;')
            $('#cari-domain #nextto-template').prop("disabled", true);
            $('#cari-domain #nextto-template').addClass("disable-btn");
        }
    })
})

$('#btn-cari-domain-2').click(function(e){
    e.preventDefault()
    const domain = $('#input-cari-domain-2').val() + $('#input-tld-register').val()
    
    if (!Boolean(domain)){
        alert('Domain tidak boleh kosong')
        return false
    }
    
    window.value_note = ""

    $('[data-info]').text('pencarian...')
    $('[data-domain]').text('')
    $('[data-available]').text('')
    
    $.get('http://portal.bikin.website/apis/searchdomain.php?domain=' + domain, function(res) {
        $('[data-info]').text('Domain')
        $('[data-domain]').text(domain)
        
        if (res.data == "available") {
            $('[data-available]').text('tersedia')
            $('#domain-show').text(domain)
            $('#cari-domain #nextto-template').click()
        } else {
            $('[data-available]').html('tidak tersedia.</br> Silahkan cari nama domain lain.')
            $('#domain-show').text('')
            alert('Domain tidak tersedia')
        }
    })
})

$('#btn-transfer-domain, #btn-transfer-domain-qwords').click(function(e){
  e.preventDefault()
  
  var domain = $('#input-transfer-domain').val()
  
  if (!Boolean(domain)){
      alert('Domain kosong')
      return
  }
  
  window.value_note = ""
  if (this.id == "btn-transfer-domain") {
      value_note = `Transfer Domain ${domain} dari luar Qwords.<br/> <small>Untuk Domain berada diluar Qwords, proses migrasi domain diperlukan.</small>`
  } else {
      value_note = `Transfer Domain ${domain} dari Qwords`
  }
  
  $('#domain-show').text(domain)
  $('#search-result').hide()
  $('#search-result-transfer').show()
  $('#search-result-transfer p').html(value_note)
  $('#cari-domain #nextto-template').prop("disabled", false);
  $('#cari-domain #nextto-template').removeClass("disable-btn");
  
})

$('#decoy-nextto-template').click(function(){
    
    var domaintransfer = $('#input-transfer-domain-2').val() 
    var domaintransfer2 = $('#input-transfer-domain-3').val() + $('#input-tld-transfer').val()
    
    if (Boolean(domaintransfer) && $('#profile-tab').hasClass('active') ){
        window.domaintype = null
        $.get('https://portal.qwords.com/apis/isDomainQwords.php?domain=' + domaintransfer)
            .then(res => {
                
                    window.value_note = ""
                    if (parseInt(res) == 1) {
                        value_note = `Transfer Domain ${domaintransfer} dari luar Qwords.<br/> <small>Untuk Domain berada diluar Qwords, proses migrasi domain diperlukan.</small>`
                        $('#show-diskon-100').show()
                    } else {
                        $('#show-diskon-100').hide()
                        value_note = `Transfer Domain ${domaintransfer} dari Qwords`
                    }
      
                    $('#domain-show').text(domaintransfer)
                    $('#search-result').hide()
                    $('#search-result-transfer').show()
                    $('#search-result-transfer p').html(value_note)
                    
                    $('#container_domain').hide()
                    
                    $('#cari-domain #nextto-template').click()
            })
    }
    
    else if (Boolean(domaintransfer2) && $('#transfer-content').hasClass('active')) {
        
        window.value_note = "transfer domain default"
        
        $.get('http://portal.bikin.website/apis/searchdomain.php?domain=' + domaintransfer2, function(res) {
            const domain = domaintransfer2
            
            $('[data-info]').text('Domain')
            $('[data-domain]').text(domain)
            $('#domain-show').text(domain)
            
            
            if (res.data !== "available") {

                $('#cari-domain #nextto-template').click()
                window.domaintype = 'transfer'
                $('#label-domain').text('transfer') 
                
                $('#container_domain').show()
                
                const price = $('#input-tld-transfer :selected').data('transfer')
                $('#harga-domain').text(parseInt(price).toLocaleString())
                
            } else {

                $('#domain-show').text('')
                alert('Domain tidak tersedia')
            }
        })
    
    } else if ($('#home-tab').hasClass('active')) {
        window.domaintype = 'register'
        $('#label-domain').text('register')
        var price = $('#input-tld-register :selected').data('register')
        
        if (['.com', '.id'].includes($('#input-tld-register').val())){
            price = 0
        }
        
        $('#harga-domain').text(parseInt(price).toLocaleString())
        $('#container_domain').show()
        
        $('#btn-cari-domain-2').click()
    }
    
})


function requestSuggest(){
    var domain = $('#input-cari-domain-2').val() + $('#input-tld-register').val()
    var country = $('#country-input').val()
    
    fetch(`https://qwords.com/apis/suggest.php?command=suggest&name=${domain}&lang=${country}&tlds=id,com&include-registered=false&max-results=10`)
        .then(r => r.json())
        .then(r => {
            
            $('#section-suggest').empty()
            if (r.results.length > 0){
                
                r.results.forEach((d,i) => {
                    
                    if(i > 0) {
                        
                        var icon,pesan
                        if (d.availability == 'available'){
                            icon = `<i class="fa fa-check-circle text-success" aria-hidden="true" title="available"></i>`  
                            pesan = `<button class="btn btn-success" style="font-size: small;padding: 0.4em;margin-left: 10px;" onclick="goNextPilihTemplate('${d.name.toLowerCase()}', event)">pakai</button>`
                        } else {
                            icon = `<i class="fa fa-exclamation-circle" aria-hidden="true" title="${d.availability}"></i> `
                            pesan =''
                        }
                        
                        $('#section-suggest').append(`<div class="col-6" style="overflow-y: auto; display:flex; align-items: center;margin-bottom: 1em;"> <span style="flex:1">${d.name.toLowerCase()}</span> ${icon} ${pesan}</div>`)
                    }
                })
                
            }

        })
}

$('#country-input').change(requestSuggest)

function goNextPilihTemplate(domain, ev){
    ev.preventDefault();
    
    const name = domain.split('.')[0]
    const tld = '.' + domain.split('.')[1]
    
    $('#input-cari-domain-2').val(name)
    $('#input-tld-register').val(tld)
    // $('#decoy-nextto-template').click()
}


