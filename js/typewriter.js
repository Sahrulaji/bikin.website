var $ = jQuery;
$(function () {
    $("[data-typer]").attr("data-typer", function(i, txt) {

    var $typer = $(this),
      tot = txt.length,
      pauseMax = 100,
      pauseMin = 80,
      ch = 0;
  
    (function typeIt() {
      if (ch > tot) return;
      $typer.text(txt.substring(0, ch++));
      setTimeout(typeIt, ~~(Math.random() * (pauseMax - pauseMin + 1) + pauseMin));
    }());
  
  });
});