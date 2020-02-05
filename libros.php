<style type="text/css">
#comunicacion{
    transition:2s;
}
#matematica{
    transition:2s;
}
.cursos{
        min-width: 708px;
    margin: 0 auto;
}
#Libros li {
    width: 180px;
}
/*-------------------------------------------------------Portadas----------------------------------------------------------------- */
.iconview {
    top: 300px; 
}
.card-panel{
    position:relative;
    margin-top: 18px;
    z-index:2 !important;
    min-height:70vh;
}
#caja-menu-grados{
    position: fixed;
    transform: translate(834px, 20vh);
    z-index: 1;
    width: 92px;
    transition:2s;
}
#flecha-caja{
    transform: translate(60px, -196px);
    background: #4a4a4a;
    width: 31px;
    display: flex;
    padding: 5px;
    border-bottom-right-radius: 50px;
    border-top-right-radius: 50px;
}
 #caja-menu-grados:hover{
    transform: translate(888px, 20vh);
    transition:1s;

}   
.gris-claro {
    color: #eeeeee !important;
}
#menu-grados {
    width: 60px;
    text-align: center;
   
    background-color: rgba(74, 74, 74, 0.2);
    border-radius: 30px;
    border: solid 1px grey;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    
}
#menu-grados li{
    width: 60px;
    text-shadow: 0px 0px 4px black;
    font-family: arial;
}
#menu-cursos {
    width: 120px;
    position: fixed;
    transform: translate(-144px, 20vh);
}
#menu-cursos li {
    width: 120px;
    background-color: #ffea7a;
    text-align: center;
    border-radius: 0;
    margin: 3px 0;
    box-shadow: -3px 1px 5px 0px #0000002e;
    font-family: arial;
}
#menu-cursos li:hover{
    border-bottom-left-radius: 50%;
    transition:0.5s;
}
a:hover, a:active, a:focus {
    color: black !important;
}
.black-text{
    text-shadow:none;
}
</style>
   <?php 
   $date=date("d".'-'."m".'-'."Y");
   $F=strtotime($fecha);
    if ($F <= strtotime('07-03-2020')){  
                        $libros=$_POST['data'];
                       $g=$_POST['g'];
                       $nivel=$_POST['nivel'];
}                                  
                        ?>
<!--<script type="text/javascript" src="js/data.js"></script>-->

<div id="fullscreen" class="section no-pad-bot" id="index-banner">
    <div class="container contenedor-libros">
        <br>
        <br>
        <div id="caja-menu-grados">
       
        <?php if($nivel=='p'){?>
            <ul id="menu-grados">
            <li title="Primer grado" class="li_m_cursos" >
                <a class="btn-floating blue" onclick="grado(1)">
                   1°
                </a>
            </li>
            <li title="Segundo grado" class="li_m_cursos" >
                <a class="btn-floating red" onclick="grado(2)">
                   2°
                </a>
            </li>
            <li title="Tercer grado" class="li_m_cursos" >
                <a class="btn-floating yellow accent-4" onclick="grado(3)">
                   3°
                </a>
            </li>
            <li title="Cuarto grado" class="li_m_cursos" >
                <a class="btn-floating purple" onclick="grado(4)">
                   4°
                </a>
            </li>
            <li title="Quinto grado" class="li_m_cursos" >
                <a class="btn-floating green" onclick="grado(5)">
                   5°
                </a>
            </li>
            <li title="Sexto grado" class="li_m_cursos" >
                <a class="btn-floating orange" onclick="grado(6)">
                   6°
                </a>
            </li>
            <li title="Todos" class="li_m_cursos" >
                <a class="btn-floating white " onclick="grado('todo')">
                <i class="material-icons black-text">apps</i>
                </a>
            </li>
            </ul>
            <div id="flecha-caja"><i class="material-icons gris-claro">chevron_right</i></div>
            <?php }
            else if($nivel=='i') {           
            ?>
             <ul id="menu-grados">
                <center>Años</center>
                <li title="Tercer grado" class="li_m_cursos" >
                <a class="btn-floating yellow accent-4" onclick="anio_inicial(3)">
                   3
                </a>
            </li>
            <li title="Cuarto grado" class="li_m_cursos" >
                <a class="btn-floating purple" onclick="anio_inicial(4)">
                   4
                </a>
            </li>
            <li title="Quinto grado" class="li_m_cursos" >
                <a class="btn-floating green" onclick="anio_inicial(5)">
                   5
                </a>
            </li>
            </ul>
            <div style="transform: translate(60px, -108px)" id="flecha-caja"><i class="material-icons gris-claro">chevron_right</i></div>
            <?php }
             else if($nivel=='s') {      
            ?>
             <ul id="menu-grados">
             <center>Año</center>
                            <li title="Primer grado" class="li_m_cursos" >
                <a class="btn-floating blue" onclick="anio_secundaria(1)">
                   1
                </a>
            </li>
            <li title="Segundo grado" class="li_m_cursos" >
                <a class="btn-floating red" onclick="anio_secundaria(2)">
                   2
                </a>
            </li>
            <li title="Tercer grado" class="li_m_cursos" >
                <a class="btn-floating yellow accent-4" onclick="anio_secundaria(3)">
                   3
                </a>
            </li>
            <li title="Cuarto grado" class="li_m_cursos" >
                <a class="btn-floating purple" onclick="anio_secundaria(4)">
                   4
                </a>
            </li>
            <li title="Quinto grado" class="li_m_cursos" >
                <a class="btn-floating green" onclick="anio_secundaria(5)">
                   5
                </a>
            </li>
            <li title="Todos" class="li_m_cursos" >
                <a class="btn-floating white " onclick="grado('todo')">
                <i class="material-icons black-text">apps</i>
                </a>
            </li>
            </ul>
            <div id="flecha-caja"><i class="material-icons gris-claro">chevron_right</i></div>
            <?php } ?>
     
        
       </div>
        <div class="card-panel grey lighten-5 z-depth-1">
        <ul id="menu-cursos">
        
      <?php
      
      $x=0;
      foreach ($libros as $c){
         $list=$libros[$x][0]['curso'];
         $title=$libros[$x][0]['titulo'];
            
         if($nivel=='p'){
                $titulo=substr($title, 0, -2);
            }
            elseif($nivel=='i'){
                $titulo=substr($title, 0, -7);
            }
            elseif($nivel=='s'){
                $titulo=substr($title, 0, -2);
            }

         ?>
            <a href="#<?=$list?>" title="<?=$titulo?>" >
                <li  class="li_m_cursos" >
                    <?=$titulo?>
                </li>
            </a>
            <?php $x++;} ?>
		</ul>
            <br>
            <div class="row valign-wrapper">
                <div class="items cursos">                
                    <center>
                        <ul id="Libros" class="" data-id="2">
                            <?php         
                            $t=0;
                        foreach ($libros as $j){                           
                             $libros[$t];
                                    $w=0;
                                    echo "<div id='".$libros[$t][0]['curso']."'>"; 
                                  foreach ($libros[$t][$w] as $i){
                                        $grado=$libros[$t][$w]['grado'];
                                        $curso=$libros[$t][$w]['curso'];
                                        $color=$libros[$t][$w]['color'];
                                        $titulo=$libros[$t][$w]['titulo'];
                                        $portada=$libros[$t][$w]['portada'];
                                        $unidades=$libros[$t][$w]['unidades'];
                                        $activo=$libros[$t][$w]['activo'];
                                        $id=$curso.$grado;
                                        $di=$grado.$curso;
                        if($g =='todo'){                                 
                            if(isset($libros[$t][$w]['titulo']) && isset($libros[$t][$w]['portada'])){                              
                                  ?>
                            <li class="menu-libros"><a  <?php if($activo=='1') {?> onclick="abrir(<?=$t?>,<?=$w?>)" <?php }?>>
                                    <style type="text/css">
                                    <?='#'.$id?> {
                                        background-image: url(img/portadas/<?=$portada?>);
                                        background-size: 100% 100%;
                                        height: 220px;
                                        width: 160px;
                                        z-index: 5;
                                        color: transparent;
                                        border: solid 2px #ffc900;
                                    }
                                    .capa_color {
                                        color: transparent;
                                        transition: 0.8s;
                                    }

                                    <?php if($activo=='1') {
                                        ?><?='#'.$id?>:hover>.capa_color>.iconview {
                                            transform: translate(0px, -200px);
                                            transition: 0.8s;
                                            z-index: 4;
                                            color: white;
                                        }

                                        <?='#'.$id?>:hover .capa_color{
                                            background-color: <?=$color?>da;
                                            transition: 0.8s;
                                            box-shadow: 2px 3px 7px #000000a6;
                                        }

                                        <?php
                                    }

                                    else {
                                        ?><?='#'.$id?> {

                                            opacity: 0.3;
                                        }

                                        <?php
                                    }

                                    ?>
                                    </style>

                                    <div id="<?=$id?>">
                                        <div style="background-size:100% 100%;width:156px;height: 216px;position: absolute;"
                                            class='capa_color'>
                                            <i class='iconview material-icons'>visibility</i>
                                        </div>
                                    </div>
                                </a>
                                <div class='wrap-info'>
                                    <span class='titulo data'><?=$titulo?></span>
                                </div>
                            </li>

                                <?php }
                            }
                            else if($grado==$g ){                                
                                    ?>
                                <style>
                                    .menu-libros{
                                        float:left;
                                    }
                                </style>
                              <li class="menu-libros"><a  <?php if($activo=='1') {?> onclick="abrir(<?=$t?>,<?=$w?>)" <?php }?>>  
                                      <style type="text/css">
                                      <?='#'.$id?> {
                                          background-image: url(img/portadas/<?=$portada?>);
                                          background-size: 100% 100%;
                                          height: 220px;
                                          width: 160px;
                                          z-index: 5;
                                          color: transparent;
                                          border: solid 2px #ffc900;
                                      }
                                    
                                      .capa_color {
                                          color: transparent;
                                          transition: 0.8s;
                                      }
                                      <?php if($activo=='1') {
                                          ?><?='#'.$id?>:hover>.capa_color>.iconview {
                                              transform: translate(0px, -200px);
                                              transition: 0.8s;
                                              z-index: 4;
                                              color: white;   
                                          }
                                          <?='#'.$id?>:hover .capa_color{
                                              background-color: <?=$color?>da;
                                              transition: 0.8s;
                                              box-shadow: 2px 3px 7px #000000a6;
                                          }
                                          <?php
                                      }
                                      else {
                                          ?><?='#'.$id?> {
                                              opacity: 0.3;
                                          }
                                          <?php
                                      }  
                                      ?>
                                      </style>
                                      <div id="<?=$id?>">
                                          <div style="background-size:100% 100%;width:156px;height: 216px;position: absolute;"
                                              class='capa_color'>
                                              <i class='iconview material-icons'>visibility</i>
                                          </div>
                                      </div>
                                  </a>
                                  <div class='wrap-info'>
                                      <span class='titulo data'><?=$titulo?></span>
                                  </div>
                              </li>
                            <?php } 
                            $w++; }; 
                            if($g=='todo'){echo"<hr>";}?>
                           </div>
                            <?php   $t++;}; ?>
                            <script>
                            function abrir(Curso, Grado){                               
                                $("#portada").css("display", "block");
                                $('#cuerpo').load('unidades.php',{
                                    curso: Curso,
                                    grado: Grado
                                });
                            };
                            var options = {};
                            $( "#main-nav" ).show();
                            </script>
                   </ul>     
                </div>
            </div>
        </div>
    </div>