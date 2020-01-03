<script type="text/javascript">

function Page_15() {
    start_15();
    inicio();
    count = 3;
}

function Page_16() {
    start_16();
    inicio();
    count = 3;
}

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

function Page_18() {
    start_18();
    inicio();
    count = 3;
}

function Page_19() {
    start_19();
    inicio();
    count = 3;
}
function Page_20() {
    start_20();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_15() {
    $("#ventana").load(ruta + '2-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_0_15()",
        titulo: "<center><h5><span>Registra</span> la información utilizando palotes y <span>escribe</span> la cantidad.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-0-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-0-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_0_16()",
        titulo: "<center><h5><span>Organiza</span> la siguiente información en la tabla de datos.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-0-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '2-0-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_0_17()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>escribe</span> en la tabla de datos cuántos animales hay según el número de patas que tienen.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-0-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '2-0-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_0_18()",
        titulo: " <center><h5><span>Observa</span> el siguiente diagrama y <span>escribe</span> cuántos niños viajan en cada medio de transporte durante las vacaciones.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-0-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '2-0-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_0_19()",
        titulo: "<center><h5><span>Registra</span> con palotes la cantidad de generos favoritos de películas para los niños de segundo grado. Luego, <span>realiza</span> el diagrama de barras según el cuadro.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-0-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '2-0-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_20()",
        titulo: "<center><h5>Se preguntó a los padres de 2.° grado qué país les gustaría visitar con sus familias. <span>Observa</span> sus respuestas.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-0-20",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>