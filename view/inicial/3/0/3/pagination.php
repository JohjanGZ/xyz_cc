<script type="text/javascript">

function Page_3() {
    start_3();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_3() {
    $("#ventana").load(ruta + '3-0-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_3()",
        titulo: "<center><h5><span>Observa</span> la playa y descríbelo, colorea los dibujos de la imagen según la clave de colores que está en la parte inferior y <span>colorea</span> lo demás como desees.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-0-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>