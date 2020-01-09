<script type="text/javascript">
function Page_22() {
   start_22();
   inicio();
   count = 3;
}
var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_22() {
    $("#ventana").load(ruta + '2-2-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_22()",
        titulo: " <center><h5><span>Observa</span> la imagen y <span>resuelve</span> el problema.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-2-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>