$(document).ready(function(){
    $('.templates-list .templates').addClass('col-sm-6')
    
    //******FILTER FUNCTION******//
    $('.category_template').click(function () {
      var category = $(this).attr('id');
      $('.templates-list .templates').addClass('hide');
      setTimeout(function () {
        $('.templates-list .templates').hide();
      }, 300);
      setTimeout(function () {
        $('.templates-list .templates.category-' + category).removeClass('hide');
        $('.templates-list .templates.category-' + category).show();
      }, 300)
    })

    $(".category_template#semua").click(function(){
      $('.templates-list .templates').removeClass('hide');
      setTimeout(function () {
        $('.templates-list .templates').show();
      }, 300);
    });

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
      if (scroll >= 450) {
          $(".templates-catalogue .sidebar").addClass("sticky");
          $(".list-wrapper").addClass('sticky-sidebar');
      } else {
          $(".templates-catalogue .sidebar").removeClass("sticky");
          $(".list-wrapper").removeClass('sticky-sidebar');
      }
      if($(window).scrollTop() + $(window).height() > $(document).height() - 250) {
          $(".templates-catalogue .sidebar").removeClass("sticky");
          $(".list-wrapper").removeClass('sticky-sidebar');
      }
    });

    $(".wrapper-sidenav .category_template").click(function() {
      $(this).addClass('selected').siblings().removeClass('selected');
    });
});