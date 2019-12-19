<script type="text/javascript">


function Page_22() {
    start_22();
    inicio();
    count = 3;
}

function Page_23() {  
   start_23();
   inicio();
   count = 3;
}
function Page_24() {  
   start_24();
   inicio();
   count = 3;
}


var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_22() {
    $("#ventana").load(ruta + '2-3-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_2_3_22()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>completa</span> la tabla de datos.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-3-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '2-3-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_2_3_23()",
        titulo: "<center><h5><span>Marca</span> con un aspa (X) los cuadros teniendo en cuenta la cantidad de animales que registraste en la tabla de datos.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-3-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '2-3-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_24()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>responde</span>.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-3-24",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>