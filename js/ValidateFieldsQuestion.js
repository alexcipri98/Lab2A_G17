$(document).ready(function() {
    $("form").submit(function(){
        alert("hey");
        var str=$("#email").val();
       // var vol= str.match(/[a-zA-Z]+[0-9]{3}+@+(ikasle\.ehu\.([eus|es]))/);
      //  var val= /(^[a-zA-Z]+)([0-9]{3})@ikasle\.ehu\.([eus|es])/gm;
       // var val2=/(^[a-zA-Z]+)\.?([a-zA-z]*)@ehu\.([eus|es])/gm;
        
      /*  if(vol==null){
            alert("email incorrecto");
            return false;
        }*/
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
         return true;
         });
    });
