<script type="text/javascript">

function Page_2() {
    start_2();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_2() {
    $("#ventana").load(ruta + '2-2-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_2()",
        titulo: "<center><h5><span>Observa</span> los ábacos y <span>completa</span> el cuadro con las cantidades que correspondan.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-2-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>