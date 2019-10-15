
    <?php
  session_start();
  if( !(isset($_SESSION['login_user'])) && !($_SESSION['login_user']==true)){
    header('location: ../../login.php');
  
  } 

  include('../../php/config.php');
        $SQLejercicios="select * from ejercicios";
                $result = $db->query($SQLejercicios);
                $count_ejercicio=$result->num_rows;
               echo "<br<h6>Total: ".$count_ejercicio."</h6><div class='lista'>";
               
                while($ejercicio = $result->fetch_array(MYSQLI_ASSOC)){         

                        $tipo=$ejercicio['tipo_ejercicio'];
                        $id=$ejercicio['id_ejercicio'];
                        $nombre=$ejercicio['nombre'];

                    echo 
                    "
                    
                    <a class='ver-ejercicio' onclick='".$tipo.$id."()'>
                    <div id='ver".$id."' class='card-panel indigo accent-2' onclick=''>
                     <span class='white-text' >id: 
                    </span>
                    <span class='white-text' id='id".$id."' >".$id."
                    </span>
                    <span class='white-text' >- 
                    </span>
                    <span class='white-text' id='nombre".$id."'>".$nombre."
                    </span>
                    </div>
                    </a>



                    ";

               echo"
                    <script>
                  function ".$tipo.$id."(){



                var  id".$id."= $('#id".$id."').text();
                var  nombre".$id."= $('#nombre".$id."').text();
       
        $('#btn-ayuda').css('display', 'block');

        $('#cargar').load('".$tipo.".php',
                     {
                        id:id".$id.", 
                        nombre:nombre".$id."
                     }
                     );

                     };


                   </script>";
                 
                }

          ?>
        </div>