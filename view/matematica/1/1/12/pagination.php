<script type="text/javascript">
<<<<<<< HEAD
=======

>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
function Page_21() {
    start_21();
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
function start_21() {
    $("#ventana").load(ruta + '1-1-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_21()",
<<<<<<< HEAD
        titulo: "<center><h5><span>Calcula</span> la suma en vertical con ayuda de las imágenes. Luego en el recuadro selecciona la respuesta correspondiente.</h5></center>", 
=======
        titulo: "<center><h5><span>Calcula</span> la suma en vertical con ayuda de las imágenes. Luego en el recuadro <span>selecciona</span> la respuesta correspondiente.</h5></center>",
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-1-21",
        nota: cal
    });
    return false;
};

<<<<<<< HEAD
=======

>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>