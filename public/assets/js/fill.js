$(document).ready(function() {

    //preencer formulario de forma dinamica 
    function pre_form(){
      
        $("#select").on("change", function() {
            var $name = $(this).find(":selected").data('email');
            $("#sendEmail").val($name);
            });
    }

    pre_form();



});
