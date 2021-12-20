$(document).ready(function(){
    
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

    // $(window).scroll(function() {    
    //   var scroll = $(window).scrollTop();
  
    //   if (scroll >= 450) {
    //       $(".templates-catalogue .sidebar").addClass("sticky");
    //       $(".list-wrapper").addClass('sticky-sidebar');
    //   } else {
    //       $(".templates-catalogue .sidebar").removeClass("sticky");
    //       $(".list-wrapper").removeClass('sticky-sidebar');
    //   }
    //   if($(window).scrollTop() + $(window).height() > $(document).height() - 250) {
    //       $(".templates-catalogue .sidebar").removeClass("sticky");
    //       $(".list-wrapper").removeClass('sticky-sidebar');
    //   }
    // });

    $(".wrapper-sidenav .category_template").click(function() {
      $(this).addClass('selected').siblings().removeClass('selected');
    });

});

// Sccroll filter
(function($){
  $(window).on("load",function(){
    $(".content").mCustomScrollbar({
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

// scroll animations
// Detect request animation frame
var scroll = window.requestAnimationFrame ||
// IE Fallback
function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 

function loop() {

    Array.prototype.forEach.call(elementsToShow, function(element){
      if (isElementInViewport(element)) {
        element.classList.add('is-visible');
      } else {
        element.classList.remove('is-visible');
      }
    });

    scroll(loop);
}

// Call the loop for the first time
loop();
function isElementInViewport(el) {
   if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}
$(function() {
  var section = $(".templates-banner");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 1) {
          section.addClass("templates-scroll");
      } else {
          section.removeClass("templates-scroll");
      }
  });
});