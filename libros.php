<style type="text/css">
ul li {
    width: 180px;
}

/*-------------------------------------------------------Portadas----------------------------------------------------------------- */
.iconview {
    top: 300px;
}
</style>
<!--<script type="text/javascript" src="js/data.js"></script>-->

<div id="fullscreen" class="section no-pad-bot" id="index-banner">
    <div class="container contenedor-libros">
        <br>
        <br>
        <div class="card-panel grey lighten-5 z-depth-1">
            <br>
            <div class="row valign-wrapper">
                <div class="items cursos">
                    <center>
                        <?php $libros=$_POST['data'];?>
                        <ul id="Libros" class="" data-id="2">

                            <?php       
                            $t=0;
                        foreach ($libros as $j){
                             $libros[$t];
                                    $w=0;
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

                                <?php } $w++; };  ?>
                            <hr>
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
                        
                </div>
            </div>
        </div>
    </div>