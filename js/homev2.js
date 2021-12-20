var $ = jQuery;
$(document).ready(function(){
  $("#btn-banner-pesan").click(function(){ 
    sessionStorage.clear();
  });
  
  // Save data packet to sessionStorage
  $("#package-section .btn-pesan").click(function(){ 
    var Paket = $(this).attr("data");
    var Harga = $(this).attr("data-harga");
    var pid = $(this).attr("data-pid");
    sessionStorage.setItem('pid', pid);
    sessionStorage.setItem('Paket', Paket);
    sessionStorage.setItem('Harga', Harga);
  });

  // list paket
  // $('.owl-carousel').owlCarousel({
  //   loop:true,
  //   margin:10,
  //   nav:true,
  //   responsive:{
  //       0:{
  //         items:1
  //       },
  //       767:{
  //         items:2
  //       },
  //       981:{
  //         items:3
  //       },
  //       1200:{
  //         items:5
  //       }
  //   }
  // })

});

