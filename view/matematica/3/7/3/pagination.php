<script type="text/javascript">

function Page_15() {
    start_15();
    inicio();
    count = 3;
}
function Page_16() {
    start_16();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_15() {
    $("#ventana").load(ruta + '3-7-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_7_15()",
        titulo: "<center><h5><span>Indica</span> si la figura es simétrica o no.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-7-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-7-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_7_16()",
        titulo: "<center><h5><span>Selecciona</span> la figura que es simétrica.</h5></center>",
        
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-7-16",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>