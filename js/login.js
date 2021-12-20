$(document).ready(function(){
    $( "#loginform" ).prepend( '<h2 class="text-center my-3">LOG IN</h2>' );
    // $('#loginform p input.input').addClass('form-control');
    // $('#user_login').attr("placeholder", "Username");
    // $('#user_pass').attr("placeholder", "Password");
    $('#wppb-login-wrap .login-submit input, #wppb-recover-password-button, .form-submit #register, #wppb-edit-user #edit_profile').addClass('btn btn-outline-danger no-outline btn-block submit');
})