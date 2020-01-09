<script type="text/javascript">


function Page_5() {
    start_5();
    inicio();
    count = 3;
}

function Page_6() {  
   start_6();
   inicio();
   count = 3;
}
function Page_7() {  
   start_7();
   inicio();
   count = 3;
}
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


var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_5() {
    $("#ventana").load(ruta + '2-1-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_1_5()",
        titulo: "<center><h5><span>Relaciona</span> cada imagen con su respectivo nombre.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-1-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '2-1-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_1_6()",
        titulo: "<center><h5><span>Selecciona</span> el reflejo de la primera figura.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-1-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '2-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_1_7()",
        titulo: "<center><h5><span>Selecciona</span> el reflejo de la primera figura.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-1-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '2-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_1_8()",
        titulo: "<center><h5><span>Selecciona</span> el reflejo de la primera figura.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-1-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '2-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_1_9()",
        titulo: "<center><h5><span>Selecciona</span> el reflejo de la primera figura.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-1-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>