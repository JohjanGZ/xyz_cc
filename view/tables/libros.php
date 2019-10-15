<button onclick="BackHome()" class="btn-back btn red"><i class="material-icons mediun">arrow_back</i></button>
			<div id="contenedor" class="container">
			<br><br><br>
				<div class="card-panel white z-depth-1 col s12 l4 m4">
					<center><h4 class="ShadownInner">Libros</h4></center>

					<table class="bordered highlight responsive-table  center" id="TableEjercicio">	
						<thead>
							<tr>
								<th>ID</th>
								<th>Portada</th>
								<th>Grado</th>
								<th>Titulo</th>
								<th></th>

              				</tr>
              			</thead>
              			<tbody>
							<?php 
								require('../php/config.php');
								
							$Sql="select * from  libros";
							$result = $db->query($Sql);
							while($row = $result->fetch_array(MYSQLI_ASSOC)){ 	
									echo "<tr>
    								
    								<td>".$row["id_libro"]."</td>
    								<td><img width='80px' src='img/portadas/".$row["img"]."'</td>
    								<td>".$row["grado"]."</td>
    								<td>".utf8_encode($row["titulo"])."</td>
									<td><a class='btn indigo accent-2 ' ><i class='material-icons white-text text-darken-4'>visibility</i></a>
									<a class='btn amber' ><i class='material-icons white-text text-darken-4'>edit</i></a>
									</td>
									
										</tr>";
								}   
															
							?> 
              			</tbody>
              		</table>
				</div>
			</div>
			<script type="text/javascript">

					$(document).ready(function(){

				   	$('#TableEjercicio').dataTable();
				    $('select').formSelect();

					});

					$("#portada").css("display", "none");

			function EditarLibros(){

				
			 		 
			} 	
			</script>