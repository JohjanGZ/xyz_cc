<script type="text/javascript">

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
var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 7do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_12() {
    $("#ventana").load(ruta + '5-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_5_0_12()",
        titulo: "<center><h5><span>Representa</span> el producto cartesiano N <span>x</span> P en el diagrama tabular. Para ello, <span>selecciona</span> de la lista los pares ordenados correspondientes.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "5-0-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '5-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_5_0_13()",
        titulo: "<center><h5><span>Representa</span> el producto cartesiano P <span>x</span> N en el diagrama sagital, para ello <span>relaciona</span> los elementos.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "5-0-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '5-0-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_5_0_14()",
        titulo: "<center><h5><span>Representa</span> el producto P <span>x</span> N, en el diagrama cartesiano. Para ello <span>selecciona</span> de la lista los pares ordenados según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "5-0-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '5-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_5_0_15()",
        titulo: "<center><h5><span>Resuelve</span> el producto cartesiano P <span>x</span> N y N <span>x</span> P. Luego, <span>selecciona</span> de la lista los pares ordenados según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "5-0-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '5-0-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_16()",
        titulo: "<center><h5><span>Relaciona</span> con flechas la relación <span>'es triple de'</span>. Luego, <span>selecciona</span> de la lista los pares ordenados correspondientes.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "5-0-16",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>