<script type="text/javascript">
<<<<<<< HEAD
function Page_14() {
    start_14();
=======
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
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
    inicio();
    count = 3;
}

<<<<<<< HEAD
function Page_15() {
    start_15();
=======
function Page_12() {
    start_12();
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
    inicio();
    count = 3;
}

<<<<<<< HEAD
function Page_16() {
    start_16();
=======
function Page_13() {
    start_13();
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
    inicio();
    count = 3;
}

<<<<<<< HEAD
function Page_17() {
    start_17();
=======
function Page_14() {
    start_14();
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
<<<<<<< HEAD
function start_14() {
    $("#ventana").load(ruta + '3-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_1_14()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> las decenas vecinas de los siguientes números. <br><span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-1-14",
=======
function start_9() {
    $("#ventana").load(ruta + '3-1-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_1_9()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> y <span class='ftitulo'>arrastra</span> la cantidad de elementos donde corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-1-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_1_10()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> los pétalos de cada flor y <span class='ftitulo'>unela</span> con su número.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-1-10",
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
        nota: cal
    });
    return false;
};

<<<<<<< HEAD
function start_15() {
    $("#ventana").load(ruta + '3-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_1_15()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la decena más próxima a los siguientes números.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-1-15",
=======
function start_11() {
    $("#ventana").load(ruta + '3-1-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_1_11()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> los dedos de cada mano y <span class='ftitulo'>unela</span> con su número.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-1-11",
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
        nota: cal
    });
    return false;
};

<<<<<<< HEAD
function start_16() {
    $("#ventana").load(ruta + '3-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_1_16()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> las centenas vecinas de los siguientes números. <br><span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-1-16",
=======
function start_12() {
    $("#ventana").load(ruta + '3-1-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_1_12()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número de elementos.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-1-12",
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
        nota: cal
    });
    return false;
};

<<<<<<< HEAD
function start_17() {
    $("#ventana").load(ruta + '3-1-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_17()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la centena más próxima a los siguientes números:</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-1-17",
=======
function start_13() {
    $("#ventana").load(ruta + '3-1-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_13()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta</span> las patitas de los escarabajos y <span class='ftitulo'>escribe</span> el número en el recuadro.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-1-13",
>>>>>>> e34c2706ee339cf5f396789f95726a16494fae55
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>