<script type="text/javascript">
<<<<<<< HEAD
=======

>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
function Page_22() {
    start_22();
    inicio();
    count = 3;
}
<<<<<<< HEAD
var cant = 18;
=======

var cant = 1;
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_22() {
    $("#ventana").load(ruta + '1-1-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_22()",
<<<<<<< HEAD
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y <span>completa</span> los números en cada recuadro.</h5></center>", 
=======
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y <span>completa</span> los números en cada recuadro.</h5></center>",
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-1-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>