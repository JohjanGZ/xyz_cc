  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.5"/>
  <script type="text/javascript" src="../../../js/jspdf.js"></script>

  <div class="container">
 <!-- <link rel="stylesheet" type="text/css" href="responsive/r1.css">-->
    <style type="text/css">
        #notas{ 
            margin-top: 3%;
            width: 70%
        }
        .TDTitulo {
            text-align: left !important;
            width: 20%;
            background: #a01b6a30;
        }
         table.highlight > tbody > tr:hover {
            background-color: rgba(253, 203, 82, 0.44);
        }
        .TotalFila{
            background-color: rgba(82, 161, 253, 0.16) !important;
        }
        table {
            margin-top: -60px;
        }
    </style>
       <center><h5>Calificaciones del alumno  <span class='ftitulo'><div id="alumno"></div></span></h5></center>
<center>
      <div id="notas">      
      <table class="centered highlight striped">
        <thead>         
          <tr>
              <th></th>
              <th>Nota</th>
              <th>Tiempo</th>
          </tr>         
        </thead>
        <tbody>
          <tr id="fila1" >
            <td class="TDTitulo">1</td>
            <td><div id="nota1"></div></td>
            <td><div id="time1"></div></td>
          </tr>
          <tr id="fila2">
            <td class="TDTitulo">2</td>
            <td><div id="nota2"></div></td>
            <td><div id="time2"></div></td>
          </tr >
          <tr id="fila3">
            <td class="TDTitulo">3</td>
            <td><div id="nota3"></div></td>
            <td><div id="time3"></div></td>
          </tr>
          <tr id="fila4">
            <td class="TDTitulo">4</td>
            <td><div id="nota4"></div></td>
            <td><div id="time4"></div></td>
          </tr>
          <tr id="fila5">
            <td class="TDTitulo">5</td>
            <td><div id="nota5"></div></td>
            <td><div id="time5"></div></td>
          </tr>

          <tr id="fila6">
            <td class="TDTitulo">6</td>
            <td><div id="nota6"></div></td>
            <td><div id="time6"></div></td>
          </tr>
          <tr id="fila7">
            <td class="TDTitulo">7</td>
            <td><div id="nota7"></div></td>
            <td><div id="time7"></div></td>
          </tr>
          <tr id="fila8">
            <td class="TDTitulo">8</td>
            <td><div id="nota8"></div></td>
            <td><div id="time8"></div></td>
          </tr>
          <tr id="fila9">
            <td class="TDTitulo">9</td>
            <td><div id="nota9"></div></td>
            <td><div id="time9"></div></td>
          </tr>
          <tr id="fila10">
            <td class="TDTitulo">10</td>
            <td><div id="nota10"></div></td>
            <td><div id="time10"></div></td>
          </tr>
          <tr class="TotalFILA">
            <td class="TDTitulo"><b>TOTAL</b></td>
            <td ><div id="NotaTotal"></div></td>
            <td ><div id="tiempoTotal"></div></td>            
          </tr>
        </tbody>
      </table>
      </div>
    </center>
  </div>

<a style="transform: translate(93vw, 73vh);" href="javascript:pruebaDivAPdf()" class="tooltipped btn btn-floating pulse" data-position="left" data-tooltip="Ver en PDF"><i class="material-icons">picture_as_pdf</i></a> 
<script type="text/javascript">

            var area=localStorage.getItem("area");
            var alumno=localStorage.getItem("Alumno");

                var nota1=localStorage.getItem("Nota2-1-1");
                var nota2=localStorage.getItem("Nota2-1-2");
                var nota3=localStorage.getItem("Nota2-1-3");
                var nota4=localStorage.getItem("Nota2-1-4");
                var nota5=localStorage.getItem("Nota2-1-5");
                var nota6=localStorage.getItem("Nota2-1-6");
                var nota7=localStorage.getItem("Nota2-1-7");
                var nota8=localStorage.getItem("Nota2-1-8");
                var nota9=localStorage.getItem("Nota2-1-9");
                var nota10=localStorage.getItem("Nota2-1-10");

function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}
if(isEmpty(nota6)){
  $('#fila6').css({"display":"none"});
}
if(isEmpty(nota7)){
  $('#fila7').css({"display":"none"});
}
if(isEmpty(nota8)){
  $('#fila8').css({"display":"none"});
}
if(isEmpty(nota9)){
  $('#fila9').css({"display":"none"});
}
if(isEmpty(nota10)){
  $('#fila10').css({"display":"none"});
}

              var tiempo1=localStorage.getItem("Time2-1-1");
              var tiempo2=localStorage.getItem("Time2-1-2");
              var tiempo3=localStorage.getItem("Time2-1-3");
              var tiempo4=localStorage.getItem("Time2-1-4");
              var tiempo5=localStorage.getItem("Time2-1-5");
              var tiempo6=localStorage.getItem("Time2-1-6");
              var tiempo7=localStorage.getItem("Time2-1-7");
              var tiempo8=localStorage.getItem("Time2-1-8");
              var tiempo9=localStorage.getItem("Time2-1-9");
              var tiempo10=localStorage.getItem("Time2-1-10");
            
                    $("#alumno").html(alumno);
                    $("#nota1").html(nota1);
                    $("#nota2").html(nota2);
                    $("#nota3").html(nota3);
                    $("#nota4").html(nota4);
                    $("#nota5").html(nota5);
                    $("#nota6").html(nota6);
                    $("#nota7").html(nota7);
                    $("#nota8").html(nota8);
                    $("#nota9").html(nota9);
                    $("#nota10").html(nota10);

                    var NotaTotal= Number(nota1)+Number(nota2)+Number(nota3)+Number(nota4)+Number(nota5)+Number(nota6)+Number(nota7)+Number(nota8)+Number(nota9)+Number(nota10);
                    $("#NotaTotal").html(NotaTotal);
                    $("#time1").html(tiempo1);
                    $("#time2").html(tiempo2);
                    $("#time3").html(tiempo3);
                    $("#time4").html(tiempo4);
                    $("#time5").html(tiempo5);
                    $("#time6").html(tiempo6);
                    $("#time7").html(tiempo7);
                    $("#time8").html(tiempo8);
                    $("#time9").html(tiempo9);
                    $("#time10").html(tiempo10);
                    $("#tiempoTotal").html(tiempoTotal);
  reinicio();
  parar();
 // var nombrearchivo=alumno+'.pdf';
    function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('.container')[0];
        specialElementHandlers = {
            'table': function (element, renderer){
                return true
        }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };
        pdf.setFont('courier');
        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width,
                'elementHandlers': specialElementHandlers
            },
            function (dispose) {
                pdf.save(alumno+'.pdf');
            }, margins
        );
    }
</script>