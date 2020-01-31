<script type="text/javascript">
function Page_lectura_6_0_1_1(){
    start_lectura_6_0_1_1();
    inicio();
    count = 0;
}
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
 
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_6_0_1_1(){
        $("#ventana").load(ruta+'lectura6-0-1-1/index.php', 
        {
        next: "Page_1()",
        procesar:"lectura6-0-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_6_0_1_1()",
        dir:ruta,
        cod: "lectura6-0-1-1",
        nota:cal
        }
        );
        return false;  
    };
function start_1() {
    $("#ventana").load(ruta + '6-0-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_6_0_1()",
        titulo: "<center><h5><span>Selecciona</span>. ¿Cuál era la enfermedad de Aurora?</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "6-0-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '6-0-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_6_0_2()",
        titulo: "<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta. Cuando la protagonista salió del hospital, luego de visitar a Aurora, vio a un grupo de gente disfrazada. ¿Quiénes eran?</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "6-0-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '6-0-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_0_3()",
        titulo: "<center><h5><span>Marca</span> si son verdaderas <span>(V)</span> o falsas <span>(F)</span> las siguientes afirmaciones.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "6-0-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>