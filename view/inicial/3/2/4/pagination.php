<script type="text/javascript">
function Page_4() {
    start_4();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '3-2-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_4()",
        titulo: "<center><h5><span>Arrastra</span> en cada círculo la cantidad de animalitos de la misma especie que encuentres.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-2-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>