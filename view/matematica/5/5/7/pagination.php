<script type="text/javascript">
function Page_10() {
    start_10();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 5do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '4-5-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_5_10()",
        titulo: "<center><h5> <span>Lee</span> los siguientes enunciados. Luego, <span>relaciona</span> si son experimentos determinísticos o no determinísticos según sea el caso.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-5-10",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>