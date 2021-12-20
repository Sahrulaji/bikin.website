$(document).ready(function(){
    // Save data packet to sessionStorage
    $(".btn-pesan").click(function(){ 
        var Paket = $(this).attr("data");
        var Harga = $(this).attr("data-harga");
        var pid = $(this).attr("data-pid");
        sessionStorage.setItem('pid', pid);
        sessionStorage.setItem('Paket', Paket);
        sessionStorage.setItem('Harga', Harga);
    });
});

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