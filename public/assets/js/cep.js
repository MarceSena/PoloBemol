$(document).ready(function() {

    function clianCep() {
        $("#street ").val("");
        $("#district").val("");
        $("#city").val("");
        $("#state").val("");
        $("#ibge").val("");
    }
    
   
    $("#cep").blur(function() {

      
        var cep = $(this).val().replace(/\D/g, '');

       
        if (cep != "") {

         
            var valcep = /^[0-9]{8}$/;

           
            if(valcep.test(cep)) {

             
                $("#street").val("...");
                $("#district").val("...");
                $("#city").val("...");
                $("#state").val("...");

                
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                       
                        $("#street").val(dados.logradouro);
                        $("#district").val(dados.bairro);
                        $("#city").val(dados.localidade);
                        $("#state").val(dados.uf);
                    } 
                    else {
                       
                        clianCep();
                        alert("CEP não encontrado.");
                    }
                });
            } 
            else {
              
                clianCep();
                alert("Formato de CEP inválido.");
            }
        } 
        else {
           
            clianCep();
        }
    });
});
