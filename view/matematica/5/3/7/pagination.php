<script type="text/javascript">

function Page_7() {
    start_7();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 7do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '4-3-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_7()",
        titulo: "<center><h5><span>Observa</span> la tabla de criterios de divisibilidad. Luego, <span>selecciona</span> de la lista la letra <span>V</span> si es verdadero o <span>F</span> si es falso según corresponda.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-3-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>