$('select[name=budged] > option:first-child')
    .text('Budget Project (jika ada)');

// redirect to thanks page
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://bikin.website/thanks/';
}, false );

$(document).ready(function(){
    setTimeout(function () {
        $('#left_backdrop, #right_backdrop').addClass('flyIn');
    }, 1100);
    setTimeout(function () {
        $('.form-container').fadeIn(700);
    }, 2000);
});
