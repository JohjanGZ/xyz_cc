|<script type="text/javascript">

function Page_25() {
    start_25();
    inicio();
    count = 3;
}


var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_25() {
    $("#ventana").load(ruta + '2-9-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_9_25()",
        titulo: "<center><h5><span>Observa</span> la ubicación de los siguientes juguetes en la cuadrícula y <span>asocia</span> cada uno de ellos con un número en la parte horizontal y  una letra en la parte vertical de dicha cuadrícula. <span>Completa</span> en los espacios en blanco con el número y la letra que corresponden a la ubicación de cada juguete.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-9-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>