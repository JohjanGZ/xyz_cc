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
    start_5();
    inicio();
    count = 3;
}

var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '4-0-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_4_0_1()",
        titulo: "<center><h5><span>Representa</span> los siguientes conjuntos por extensión. Para ello <span>selecciona</span> de la lista los elementos entre las llaves según corresponda.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "4-0-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '4-0-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_4_0_2()",
        titulo: "<center><h5><span>Lee</span> el siguiente conjunto por comprensión. Luego, <span>represéntalo</span> por extensión y con el diagrama de Venn, <span>seleccionando</span> de la lista los elementos según corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "4-0-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '4-0-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_4_0_3()",
        titulo: "<center><h5><span>Lee</span> el siguiente conjunto por comprensión. Luego, <span>represéntalo</span> con el diagrama de Venn, <span>seleccionando</span> de la lista los elementos según corresponda.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "4-0-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '4-0-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_4_0_4()",
        titulo: "<center><h5><span>Lee</span> el siguiente conjunto por comprensión. Luego, <span>represéntalo</span> por extensión y con el diagrama de Venn, <span>seleccionando</span> de la lista los elementos según corresponda.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-0-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '4-0-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_5()",
        titulo: "<center><h5><span>Determina</span> por comprensión cada uno de los siguientes conjuntos: </h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "4-0-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>