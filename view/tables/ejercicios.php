<button onclick="BackHome()" class="btn-back btn red"><i class="material-icons mediun">arrow_back</i></button>
			<div id="contenedor" class="container">
			<br><br><br>
				<div class="card-panel white z-depth-1 col s12 l4 m4">
					<center><h4 class="ShadownInner">Ejercicios</h4></center>

					<table class="bordered highlight responsive-table center" id="TableEjercicio">
						
						<thead>
							<tr>
								<th>ID</th>
								<th>Tipo</th>
								
								<th></th>

              				</tr>
              			</thead>
              			<tbody>
							<?php 
								require('../php/config.php');
								
							$Sql="select * from  ejercicios";
							$result = $db->query($Sql);
							while($row = $result->fetch_array(MYSQLI_ASSOC)){ 	
									echo "<tr>
    								
    								<td>".$row["id_ejercicio"]."</td>
    								<td>".$row["nombre"]."</td>
    								
									<td>
									<a class='btn indigo accent-2 ' ><i class='material-icons white-text text-darken-4'>visibility</i></a>
									<a class='btn amber' ><i class='material-icons white-text text-darken-4'>edit</i></a>
									<a class='btn red' ><i class='material-icons white-text text-darken-4'>delete_forever</i></a>
									</td>
									
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