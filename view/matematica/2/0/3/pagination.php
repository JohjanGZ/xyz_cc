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

function Page_6() {
    count = 3;
    start_6();
    inicio();
}

function Page_7() {
    count = 3;
    start_7();
    inicio();

}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-2-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_2_1()",
        titulo: "<center><h5><span>Registra</span> la información utilizando palotes y <span>escribe</span> la cantidad.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-2-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-2-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_2_2()",
        titulo: "<center><h5><span>Organiza</span> la siguiente información en la tabla de datos.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-2-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-2-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_2_3()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>escribe</span> en la tabla de datos cuántos animales hay según el número de patas que tienen.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-2-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-2-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_2_4()",
        titulo: " <center><h5><span>Observa</span> el siguiente diagrama y <span>escribe</span> cuántos niños viajan en cada medio de transporte durante las vacaciones.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-2-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-2-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_2_5()",
        titulo: "<center><h5><span>Registra</span> con palotes la cantidad de generos favoritos de películas para los niños de segundo grado. Luego, <span>realiza</span> el diagrama de barras según el cuadro.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-2-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-2-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_2_6()",
        titulo: "<center><h5><span>Organiza</span> los datos en la tabla y <span>realiza</span> el diagrama de barra.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-2-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-2-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_7()",
        titulo: "<center><h5><span>Responde</span> las siguientes pregutas.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-2-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>