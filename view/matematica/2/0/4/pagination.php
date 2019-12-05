<script type="text/javascript">

function Page_1() {
   
    start_1();
    inicio();
    count = 3;
}

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

function Page_4() {
    start_4();
    inicio();
    count = 3;
}

function Page_5() {
    count = 3;
    start_5();
    inicio();
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_3_1()",
        titulo: "<center><h5><span>Completa</span> las siguientes secuencias gráficas ordenando las figuras y acertar dichas secuencias:</center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-3-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_3_2()",
        titulo: "<center><h5><span>Organiza</span> la siguiente información en la tabla de datos.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-3-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-3-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_3_3()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>escribe</span> en la tabla de datos cuántos animales hay según el número de patas que tienen.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-3-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_3_4()",
        titulo: " <center><h5><span>Observa</span> el siguiente diagrama y <span>escribe</span> cuántos niños viajan en cada medio de transporte durante las vacaciones.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-3-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-3-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_5()",
        titulo: "<center><h5><span>Registra</span> con palotes la cantidad de generos favoritos de películas para los niños de segundo grado. Luego, <span>realiza</span> el diagrama de barras según el cuadro.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-3-5",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>