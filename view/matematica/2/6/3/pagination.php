<script type="text/javascript">



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

function Page_8() {
    count = 3;
    start_8();
    inicio();
}

function Page_9() {
   start_9();
   inicio();
   count = 3;
}

var cant = 7;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_3() {
    $("#ventana").load(ruta + '2-6-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_6_3()",
        titulo: "<center><h5><span>Escribe</span> la fracción que se representó en cada caso.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-6-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-6-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_6_4()",
        titulo: "<center><h5><span>Escribe</span> la fracción que se representó en cada caso.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-6-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-6-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_6_5()",
        titulo: "<center><h5><span>Escribe</span> la fracción que se representó en cada caso.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-6-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-6-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_6_6()",
        titulo: "<center><h5><span>Observa</span> los gráficos y luego <span>selecciona</span> la fracción correcta.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-6-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-6-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_6_7()",
        titulo: "<center><h5> <span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-6-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-6-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_6_8()",
        titulo: "<center><h5><span>Escribe</span> la fracción que representa cada una de las siguientes flores.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-6-8",
        nota: cal
    });
    return false;
};
/**SEPA**/
function start_9() {
    $("#ventana").load(ruta + '2-6-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_6_9()",
        titulo: "<center><h5><span>Completa</span> los espacios en blanco utilizando los símbolos >, < o = según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-6-9",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>