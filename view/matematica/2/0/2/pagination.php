<script type="text/javascript">

function Page_9() {
   
    start_9();
    inicio();
    count = 3;
}

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

function Page_13() {
    start_13();
    inicio();
    count = 3;
}

function Page_14() {
    start_14();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '2-0-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_0_9()",
        titulo: "<center><h5><span>Realiza</span> los desplazamientos indicados para que cada animalito llegue a su alimento.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-0-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_0_10()",
        titulo: "<center><h5><span>Realiza</span> los desplazamientos indicados para que cada animalito llegue a su alimento.</h5></center>",
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
        titulo: "<center><h5><span>Selecciona</span> el recorrido que realizó David,mediante las flechas, para llegar a su auto.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-0-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_0_12()",
        titulo: " <center><h5><span>Toma</span> como punto de inicio la estrella y <span>traza</span> el camino según el código de flechas.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-0-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '2-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_0_13()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>completa</span> la ubicación de los elementos en la coordenada que les corresponde.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-0-5",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-0-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_14()",
        titulo: "<center><h5><span>Observa</span> la cuadrícula, <span>coloca</span> la letra que corresponde a cada coordenada y hallarás una palabra.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-0-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>