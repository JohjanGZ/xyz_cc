<script type="text/javascript">

function Page_13() {
    start_13();
    inicio();
    count = 3;
}

function Page_14() {
    start_14();
    inicio();
    count = 3;
}


var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 13do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_13() {
    $("#ventana").load(ruta + '4-3-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_4_3_13()",
        titulo: "<center><h5><span>Observa</span> los triángulos, <span>clasifícalos</span> y halla el perímetro. Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-3-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '4-3-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_14()",
        titulo: "<center><h5><span>Observa</span> los triángulos y <span>selecciona</span> de la lista su clasificación según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-3-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>