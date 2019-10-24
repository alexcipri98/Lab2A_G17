$(document).ready(function() {
    $("form").submit(function(){
        var str=$("#email").val();

        if($("#tipo").val()=='2'){
                var vol=str.match(/[a-z]@+(ehu.eus|ehu.es)/);
                if(vol==null){
                    alert('Introduzca un email de profesor valido');
                    return false;
                }
              
        }
        if($("#tipo").val()=='1'){
                var val=str.match(/[a-z]+[0-9]{3}@+(ikasle.ehu.eus|ikasle.ehu.es)/);
                if(val==null){
                    alert('Introduzca un email de alumno valido');
                    return false;
                }
        }
        var blanco=$("#nombre").val();
        var b=blanco.match(/^$|\s+/);
        if(blanco.length==0){
            alert('nombre incompleto');
            return false;
        }
        if(b==null){
            alert('Asegurate de que has puesto un nombre y al menos un apellido');
            return false;
        }
        if($("#nombre").val().length < 10){
            alert('enunciado incompleto');
            return false;
        }
        
        return true;
         });
    });
