$(document).ready(function() {
    $("form").submit(function(){
        var str=$("#email").val();
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
        return true;
         });
    });
