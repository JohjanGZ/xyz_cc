<script type="text/javascript">
function Page_11() {
    start_11();
    inicio();
    count = 3;
}
function Page_12() {
    start_12();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 5do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '4-5-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_4_5_11()",
        titulo: "<center><h5> <span>Lee</span> los siguientes enunciados. Luego, <span>relaciona</span> si son experimentos aleatorios o determinísticos según sea el caso. </h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-5-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '4-5-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_5_12()",
        titulo: "<center><h5> <span>Lee</span> los experimentos. Luego, <span>selecciona</span> de la lista los elementos del espacio muestral según sea el caso.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "4-5-12",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>