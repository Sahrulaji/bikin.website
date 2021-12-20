//******Add smooth scrolling to links on feature icons******//
$(document).ready(function () {
  $(".icon-feature").on("click", function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate({
          scrollTop: $(hash).offset().top
        },
        1000,
        function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        }
      );
    } // End if
  });

});

//******Add smooth scroll to scrollup botton******//
window.addEventListener("scroll", function () {
  scrollFunction();
});

//document.documentElement returns the Element that is the root element of the document. This function will make the scroll up button appear after 30px from the top//
function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("scrollup").style.display = "block";
  } else {
    document.getElementById("scrollup").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


//******Change Image and set thumbnail as active for template section in homepage******//

$(document).ready(function () {
  $(".carousel_template_item").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
  });
});
      



// //******Toggle for Like Button******//
// $(document).ready(function () {
//   $(".far fa-heart").click(function () {
//     $("#ANJING").toggle();
//   });
// });

// var e = document.getElementById('testis');
// if (e.classList.contains('fa-heart')) {
//   e.classList.toggle('fa-heart');
// } else {
//   e.classList.add('fa-heart');
// }

//on scroll header
$(function() {
  //caches a jQuery object containing the header element
  var header = $("#nav-bar");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 1) {
          header.addClass("scrollNav");
      } else {
          header.removeClass("scrollNav");
      }
  });
});