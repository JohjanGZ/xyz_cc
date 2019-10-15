			 <button onclick="BackHome()" class="btn-back btn red"><i class="material-icons mediun">arrow_back</i></button>
			<div id="contenedor" class="container">
			<br><br><br>
			
				<div class="card-panel white z-depth-1 col s12 l4 m4">
					<center><h4 class="ShadownInner">Unidades</h4></center>

					<table class="bordered highlight responsive-table centered" id="TableEjercicio">
						
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Grado</th>
								<th>Ejercicios</th>
								<th></th>
	

              				</tr>
              			</thead>
              			<tbody>
							<?php 
								require('../php/config.php');
								
							$Sql="select * from  unidad";
							$result = $db->query($Sql);
							while($EJ = $result->fetch_array(MYSQLI_ASSOC)){ 

								if(isset($EJ["ejercicios"])){

								 $E=$EJ["ejercicios"];
								
								
								$array=substr("$E", 0, -1);
								 $res = explode(",", $array);
								$cantidad= sizeof($res);
								}
								else{

									$cantidad="0";
								}

									echo "<tr>
    								
    								<td>".$EJ["id_unidad"]."</td>
    								<td>".utf8_encode($EJ["nombre"])."</td>
    								<td>".$EJ["grado"]."</td>


    								<td>".$cantidad."</td>
    								
    								
									<td><a class='btn indigo accent-2 ' ><i class='material-icons white-text text-darken-4'>visibility</i></a>
									<a class='btn amber' ><i class='material-icons white-text text-darken-4'>edit</i></a>
									<a class='btn red' ><i class='material-icons white-text text-darken-4'>delete_forever</i></a></td>
									
										</tr>";

								}   
															
							?> 
              			</tbody>
              		</table>
				</div>
			</div>
			<script type="text/javascript">

					$(document).ready(function() {
					   $('#TableEjercicio').dataTable();
					    $('select').formSelect();

					} );

					$("#portada").css("display", "none");

			</script>