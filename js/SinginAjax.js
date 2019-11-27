$(document).ready(function () {
        //alert('entra al js');
    $("form").change(function validar() {
        //alert('entra a la funcion');
        $email = $('#email').val();
        //alert($email);
                       $.ajax({
                                type: 'get',
                                url: '../php/ClientVerifyEnrollment.php?email='+$email,
                                success:function(data){
                                   if(data=="NO"){
                                    $('#mss').html('No es un email VIP');
                                    $('#enviar').attr("disabled",true);
                                    }
                                    if(data=="SI"){
                                    $('#mss').html('Es un email VIP');
                                    }
                                },
                                cache:false,
                                error:function(){
                                    $('#mss').html('Error');
                                }
                            });
        });
    });