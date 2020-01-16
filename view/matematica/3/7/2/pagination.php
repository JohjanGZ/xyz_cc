<script type="text/javascript">

function Page_8() {
    start_8();
    inicio();
    count = 3;
}
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
var cant = 7;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_8() {
    $("#ventana").load(ruta + '3-7-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_7_8()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una y el número que se multiplicó a la figura 1, para que sea igual a la figura 2.</h5></center>",  
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-7-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-7-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_7_9()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una y el número que se multiplico a la figura 1, para que sea igual a la figura 2.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-7-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-7-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_7_10()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una y el número que se multiplicó a la figura 1, para que sea igual a la figura 2.</h5></center>", 
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-7-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '3-7-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_7_11()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una y a cuanto se redujo la figura 1, para que se sea igual a la figura 2. </h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-7-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-7-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_7_12()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una y a cuanto se redujo la figura 1, para que se sea igual a la figura 2. </h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-7-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-7-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_7_13()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una y a cuanto se redujo la figura 1, para que se sea igual a la figura 2. </h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-7-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-7-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_7_14()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2.  Luego, <span>escribe</span> los pares ordenados de cada una. Por ultimo <span>compara</span> las imagenes y <span>completa</span> los enunciados.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-7-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>