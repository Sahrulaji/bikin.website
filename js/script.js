$(document).ready(function () {
  $('.link-pesan').click(function(){ 
    sessionStorage.clear();
  });
  var url = window.location.pathname, 
  urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); 
  
  $('header .nav-item .nav-link').each(function(){
      if(urlRegExp.test(this.href.replace(/\/$/,''))){
          $(this).addClass('active');
      }
  });

});


$(document).ready(function () {
  $(".carousel_template_item").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
  });
});

//on scroll header
$(function() {
  var header = $("#nav-bar");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 1) {
          header.addClass("scrollNav");
      } else {
          header.removeClass("scrollNav");
      }
  });

  $('.navbar-toggler').click(function(){
    $('.navbar').toggleClass("opened-menu");
  });
});
