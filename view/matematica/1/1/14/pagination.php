<script type="text/javascript">
<<<<<<< HEAD
=======

>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
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
function Page_25() {
    start_25();
    inicio();
    count = 3;
}
<<<<<<< HEAD
var cant = 18;
=======


var cant = 3;
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_23() {
    $("#ventana").load(ruta + '1-1-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_1_23()",
<<<<<<< HEAD
        titulo: "<center><h5><span>Selecciona</span> los números que correspondan a los términos de las siguientes sustracciones.</h5></center>", 
=======
        titulo: "<center><h5><span>Selecciona</span> los números que corresponden a los términos se las siguientes sustracciones.</h5></center>",
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-1-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-1-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_1_24()",
<<<<<<< HEAD
        titulo: "<center><h5><span>Completa</span> los recuadros y halla <span>diferencia</span>.</h5></center>", 
=======
        titulo: "<center><h5><span>Completa</span> los recuadros y <span>halla</span> la diferencia.</h5></center>",
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-1-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-1-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_25()",
<<<<<<< HEAD
        titulo: "<center><h5><span>Completa</span> los recuadros y halla <span>diferencia</span>.</h5></center>", 
=======
        titulo: "<center><h5><span>Completa</span> los recuadros y <span>halla</span> la diferencia.</h5></center>",
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-1-25",
        nota: cal
    });
    return false;
};
<<<<<<< HEAD
=======

>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>