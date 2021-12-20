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


const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});





