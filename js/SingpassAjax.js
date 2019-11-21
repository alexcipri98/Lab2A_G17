$(document).ready(function () {
    $("form").change(function validar() {
        $password = $('#password').val();
        $ticket=1010;
                       $.ajax({
                                type: 'get',
                                url: '../php/ClientVerifyPass.php?password='+$password+'&ticket='+$ticket,
                                success:function(data){
                                   if(data=="NO"){
                                    $('#mss2').html('No es una contraseña válida');
                                    $('#enviar').attr("disabled",true);
                                    }
                                    else{
                                    $('#mss2').html('Es una contraseña válida');
                                    }
                                },
                                cache:false,
                                error:function(){
                                    $('#mss2').html('Error');
                                }
                            });
        });
});