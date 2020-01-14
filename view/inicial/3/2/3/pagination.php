<script type="text/javascript">
function Page_3() {
    start_3();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3() {
    $("#ventana").load(ruta + '3-2-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_3()",
        titulo: "<center><h5><span>Observa</span> lo que hacen los niños y <span>marca</span> con un aspa (X) que sentidos usan.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-2-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>