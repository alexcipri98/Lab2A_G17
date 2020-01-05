$(document).ready(function() {
    $("#insertar").click(function(){
        var str=$("#email").val();
        var val=str.match(/[a-z]+[0-9]{3}@+(ikasle.ehu.eus|ikasle.ehu.es)/);
        var vol=str.match(/[a-z]@+(ehu.eus|ehu.es)/);

        if(val==null && vol==null){
            alert('email incorrecto');
            return false;
        }
        if($("#enunciado").val().length < 10){
            alert('enunciado incompleto');
            return false;
         }

         if($("#tema").val().length == 0){
            alert('tema vacio');
            return false;
         }
         if($("#resp1").val().length < 1){
            alert('respuesta1 vacia');
            return false;
         }
         
         if($("#resp2").val().length == 0){
            alert('respuesta2 vacia');
            return false;
         }
         
         if($("#resp3").val().length == 0){
            alert('respuesta3 vacia');
            return false;
         }
         
          if($("#resp4").val().length == 0){
            alert('respuesta4 vacia');
            return false;
         }
         var aux=$("#image").val();
         if(aux.length==0){
            alert('Debe añadir una imagen');
            return false;
         }
         var f= new FormData($("#fquestion")[0]);
    		$.ajax({
    			type: 'post',
          enctype: 'multipart/form-data',
    			url: '../php/AddQuestion.php',
    			data:f,
          processData: false,
          contentType: false,
    			success:function(){
    				$('#visualizar').load('../php/ShowTable.php');
            $('#tabla').load('../php/ShowT.php?');
    			},
    			cache:false,
    			error:function(){
    				$('#visualizar').html('Error');
    			}
    		});
    	 });
    $("#reset").click(function(){
        $('#visualizar').html('');
    });

    });