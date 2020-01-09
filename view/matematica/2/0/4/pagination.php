<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}

function Page_11() {
    start_11();
    inicio();
    count = 3;
}

function Page_12() {
    start_12();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '2-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_0_10()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>completa</span> la ubicación de los elementos en la coordenada que les corresponde.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-0-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-0-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_0_11()",
        titulo: "<center><h5><span>Observa</span> la cuadrícula, <span>coloca</span> la letra que corresponde a cada coordenada y hallarás una palabra.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-0-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-0-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_12()",
        titulo: "<center><h5><span>Observa</span> la ubicación de los siguientes juguetes en la cuadrícula y <span>asocia</span> cada uno de ellos con un número en la parte horizontal y  una letra en la parte vertical de dicha cuadrícula. <span>Completa</span> en los espacios en blanco con el número y la letra que corresponden a la ubicación de cada juguete.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-0-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>