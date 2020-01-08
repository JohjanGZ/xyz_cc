<script type="text/javascript">
function Page_27() {
    start_27();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_27() {
    $("#ventana").load(ruta + '1-1-27/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_27()",
        titulo: "<center><h5><span>Lee</span> atentamente los problemas. Luego, en los espacios en blanco <span>selecciona</span> los números de la de la lista según corresponda.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "1-1-27",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>