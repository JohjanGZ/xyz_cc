<script type="text/javascript">

function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }


var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3(){   
        $("#ventana").load(ruta+'1-9-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_9_3()",
        titulo:"<center><h5><span>SOPA DE LETRAS</span></h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-9-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-9-4/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_9_4()",
        titulo:"<center><h5><span>Selecciona</span> la palabra que nombre a cada dibujo.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-9-4",
        nota:cal
        }          
        );
        return false;
    };

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>