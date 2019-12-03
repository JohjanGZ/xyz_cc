<style type="text/css">
.cursos{
        min-git width: 479px;
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
<!--<script type="text/javascript" src="js/data.js"></script>-->
<div id="main-nav" class="text-center no_modo_standalone no_popup open">
		<ul class="container" role="menu">

		        <li class="li_m_cursos" >
					<a title="Content" >
						INICIAL
					</a>
				</li>
				<li class="li_m_misalumnos active" >
					<a title="My students" >
						PRIMARIA
					</a>
				</li>
				<li class="li_m_calificaciones">
					<a title="Grades" >
						SECUNDARIA
					</a>
				</li>		
		</ul>
</div>
<div id="fullscreen" class="section no-pad-bot" id="index-banner">
    <div class="container contenedor-libros">
        <br>
        <br>
        <div id="caja-menu-grados">
        <ul id="menu-grados">
            <li title="Primer grado" class="li_m_cursos" >
                <a class="btn-floating blue" onclick="grado(1)" >
                   1°
                </a>
            </li>
            <li title="Segundo grado" class="li_m_cursos" >
                <a class="btn-floating red" onclick="grado(2)" >
                   2°
                </a>
            </li>
            <li title="Tercer grado" class="li_m_cursos" >
                <a class="btn-floating yellow accent-4" onclick="grado(3)" >
                   3°
                </a>
            </li>
            <li title="Cuarto grado" class="li_m_cursos" >
                <a class="btn-floating purple" onclick="grado(4)" >
                   4°
                </a>
            </li>
            <li title="Quinto grado" class="li_m_cursos" >
                <a class="btn-floating green" onclick="grado(5)" >
                   5°
                </a>
            </li>
            <li title="Sexto grado" class="li_m_cursos" >
                <a class="btn-floating orange" onclick="grado(6)" >
                   6°
                </a>
            </li>
            <li title="Todos" class="li_m_cursos" >
                <a class="btn-floating white " onclick="grado('todo')" >
                <i class="material-icons black-text">apps</i>
                </a>
            </li>

	
		</ul>

        <div id="flecha-caja"><i class="material-icons gris-claro">chevron_right</i></div>
       </div>
        <div class="card-panel grey lighten-5 z-depth-1">
        <ul id="menu-cursos">
            <a href="#comunicacion" title="Comunicación" >
            <li  class="li_m_cursos" >
                
                    Comunicación
                
            </li>
            </a>
            <a href="#matematica" title="Matemática" >
            <li  class="li_m_misalumnos active" >
              
                    Matemática
               
            </li>	
            </a>
		</ul>

            <br>
            <div class="row valign-wrapper">
                <div class="items cursos">
                    <center>
                        <?php 
                        $libros=$_POST['data'];
                       $g=$_POST['g'];
                        ?>
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
                            if($g=='todo'){echo"<hr>";} ?>
                           </div>
                            <?php   $t++;}; ?>
                            <script>
                            function abrir(Curso, Grado) {
                               
                                $("#portada").css("display", "block");
                                $('#cuerpo').load('unidades.php', {
                                    curso: Curso,
                                    grado: Grado
                                });

                            };
                            </script>
                   </ul>     
                </div>
            </div>
        </div>
    </div>