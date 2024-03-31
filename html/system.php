<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema Consejo Comunal</title>
	<link rel="stylesheet" type="text/css" href="../css/style_system.css">
</head>
<body>
	<header class="header">
		<div class="image-container">
			<img class="image_full-size" src="../images/membrete_universidad.jpeg">
		</div>
	</header>

	<div class="flex-container">
		<div class="main">

			<div class="options">
				<div class="usr_main"><h3>Usuario</h3><img src="../images/icons/user-solid.svg"></div>
				<div class="option_main"><li><a href="">Comunidad</a></li></div>
				<div class="option_main"><li><a href="../php/polygonal.php">Poligonales</a></li></div>
				<div class="option_main"><li><a href="../php/rewards.php">Beneficios</a></li></div>
				<div class="option_main"><li><a href="../php/services.php">Servicios</a></li></div>
				<div class="option_main"><li><a href="../php/time">Jornadas</a></li></div>
				<div class="option_main"><li><a href="./php/electoral_book.php">Libro Electoral</a></li></div>
				<div class="option_main conf"><li><a href="../php/config.php">Configuracion</a></li></div>
				<div class="option_main exit"><li><a href="index.html">Salir</a></li></div>
			</div>

		</div>	

		<div class="dashboard">
			
			<div class="stadistics_dashboard">
				<div class="graphics_dashboard">

					<div class="graphic_container">
						<div class="graphic_childs">
						
						</div>

						<h4>30% son niños.</h4>
					</div>

					<div class="graphic_container">
						<div class="graphic_olds">
						
						</div>

						<h4>30% son Adultos.</h4>
					</div>

					<div class="graphic_container">
						<div class="graphic_familys">
						
						</div>

						<h4>40% son solo familias.</h4>
					</div>

					<div class="graphic_container">
						<div class="graphic_total">
						
						</div>

						<h4>Son 400 personas en total</h4>
					</div>

					<div class="option_main rgstr">
						<li>
							<a href="../php/registrar.php">Registrar</a>
						</li>
					</div>

					<img src="../images/icons/magnifying-glass-solid.svg" class="icon_search"> 
					<div class="search_dashboard">
						<input type="text" name="search" placeholder="Ingrese un dato" class="input_inf"></input>
					</div>

				</div>

			</div>

			<div class="contain_table_dashboard">
				<table class="table">
					
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cedula</th>
						<th>Edad</th>
						<th>Fecha de Nac.</th>
						<th>Nacionalidad</th>
						<th>For You</th>
						<th>For You</th>
					</tr>


						<?php 

						$conn = pg_connect("host=localhost dbname=postgres user=postgres password=3rud1c10n");

						$query = "SELECT id, nombre, apellido, cedula, edad, f_nac, nacionalidad FROM com_prueba";
						
						$consulta = pg_query($conn, $query);

						if ($consulta) {
							while ($row = pg_fetch_object($consulta)) {
								$id = $row->id;
								$nombre = $row->nombre;
								$apellido = $row->apellido;
								$cedula = $row->cedula;
								$edad = $row->edad;
								$f_nac = $row->f_nac;
								$nacionalidad = $row->nacionalidad;
								echo "<tr>";
								echo "<td>" . $id . "</td>";
								echo "<td>" . $nombre . "</td>";
								echo "<td>" . $apellido . "</td>";
								echo "<td>" . $cedula . "</td>";
								echo "<td>" . $edad . "</td>";
								echo "<td>" . $f_nac . "</td>";
								echo "<td>" . $nacionalidad . "</td>";
								echo "<td>" . "Dato" . "</td>";
								echo "<td>" . "Dato" . "</td>";
								echo "</tr>";
							}
						}

					?>
				</table>
			</div>

		</div>

	</div>

	<footer class="footer">
			<h1>
				Este es el footer, espacio que se deja normalmente para ua firma o redes sociales.
			</h1>
	</footer>

</body>
</html>