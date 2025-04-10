<?php
require_once 'conexion.php';

$id_editar = '';
$tipo_editar = '';
$cedula_editar = '';
$nombres_editar = '';
$apellidos_editar = '';
$telefono_editar = '';
$email_editar = '';
$cumple_editar = '';
$estrato_editar = '';
$barrio_editar = '';
$sexo_editar = '';
$departamento_editar = '';
$municipio_editar = '';
$direccion_editar = '';
$lider_editar = '';
$sitio_editar = '';
$mesa_editar = '';
$tratamiento_editar = '';


if (isset($_GET['editar_id'])) {
    $editar_id = $_GET['editar_id'];
	$id_editar = $editar_id;
    $resultado = mysqli_query($conn, "SELECT * FROM personas WHERE id_personas='$editar_id'");
    if ($fila = mysqli_fetch_assoc($resultado)) {
        $id_editar = $fila['id_personas'];
        $tipo_editar = $fila['tipo'];
        $cedula_editar = $fila['cedula'];
		$nombres_editar = $fila['nombres'];
		$apellidos_editar = $fila['apellidos'];
		$telefono_editar = $fila['telefono'];
		$email_editar = $fila['email'];
		$cumple_editar = $fila['cumple'];
		$estrato_editar = $fila['estrato'];
		$barrio_editar = $fila['barrio'];
		$sexo_editar = $fila['sexo'];
		$departamento_editar = $fila['departamento'];
		$municipio_editar = $fila['municipio'];
		$direccion_editar = $fila['direccion'];
		$lider_editar = $fila['lider'];
		$sitio_editar = $fila['sitio'];
		$mesa_editar = $fila['mesa'];
		$tratamiento_editar = $fila['tratamiento'];
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Formulario Tabla</title>
</head>

<body>

	<div class="superior">
		<button class="superior--cuenta">Cuenta</button>
		<button class="superior--cerrarsesion">Cerrar Sesión</button>
	</div>

	<div class="menu">
		<div class="icono">
			<a href="" alt="Chat">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
				<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
				</svg>
				</svg>
			</a>
		</div>

		<div class="icono">
			<a href="" alt="Chat">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
  				<path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"/>
  				<path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"/>
  				<path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"/>
				</svg>
			</a>	
		</div>

		<div class="icono">
			<a href="" alt="Agregar"></a>
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-database-fill-add" viewBox="0 0 16 16">
				<path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1"/>
				<path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905"/>
			  	</svg>
		</div>

	</div>

	<div class="menu2"> 

		<nav id='menu'>
  			<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
	  		<ul>
   				<li><a class='dropdown-arrow' href='#'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  					<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
  					<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
					</svg></a>
				</li>

   		 		<li><a class='dropdown-arrow' href='#'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
					</svg></a>
				</li>

   				<li><a class='dropdown-arrow' href='#'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
					</svg></a>
				</li>
    
   				<li><a class='dropdown-arrow' href='#'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-x" viewBox="0 0 16 16">
  					<path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
  					<path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708"/>
					</svg></a>
				</li>
  			</ul>
		</nav>
	</div>
	<div class="cuerpo">


<!--    INICIA FORM     -->
		<form class="form--main" action="guardar.php" method="post">
	
			<div class="form--titulo-contenedor">
				<div class="form--input__one">Formulario de Registro</div>
				<div class="form--empty__one"></div>

				<?php if (!empty($id_editar)): ?>
					<div class="form--aviso-edicion">
						<strong>⚠️ Estás editando el ítem: <?= $id_editar ?></strong>
					</div>
				<?php endif; ?>
			</div>

<!-- 2da línea: Tipo-Cédula. INICIO. -->
			<div class="form--input__two">
				<div class="form--input__two__one">
					<input type="hidden" name="id_personas" id="id_personas" value="<?= $id_editar ?>">
					<select class="form--input__two__doc" name="tipo" id="tipo" required>
						<option class="empty" value="" <?= $tipo_editar == '' ? 'selected' : '' ?>></option>
						<option value="Cédula" <?= $tipo_editar == 'Cédula' ? 'selected' : '' ?>>Cédula</option>
						<option value="Documento Nacional de Extranjería" <?= $tipo_editar == 'Documento Nacional de Extranjería' ? 'selected' : '' ?>>Documento nacional de extranjería</option>	
					</select>
					<label class="form--input__two__label">Tipo de Documento: </label>
				</div>
				<div class="empty_two">
				</div>
				<div class="form--input__two__two">
					<input class="form--input__two__numcedula" type="text" name="cedula" id="cedula" value="<?= $cedula_editar ?>" required></input>
					<label class="form--input__two__nclabel">Cédula: </label>
				</div>
			</div>
<!-- 2da línea: Tipo-Cédula. FIN. -->

<!-- 3ra línea: Nombres-Apellidos. INICIO. -->
			<div class="form--input__three">
				<div class="form--input__three__one">
					<input class="form--input__three__names" name="nombres" id="nombres" type="text" value="<?= $nombres_editar ?>" required>
					<label class="form--input__three__nombres">Nombres: </label>
				</div>

				<div class="empty_three">
				</div>

				<div class="form--input__three__two">
					<input class="form--input__three__lastnames" type="text" name="apellidos" id="apellidos" value="<?= $apellidos_editar ?>" required>
					<label class="form--input__three__apellidos">Apellidos: </label>
				</div>
			</div>
<!-- 3ra línea: Nombres-Apellidos. FIN. -->

<!-- 4ta línea: Tel-Email-Cumpleaños. INICIO. -->
			<div class="form--input__four">
				<div class="form--input__four__one">
					<input class="form--input__four__phone" type="number" name="telefono" id="telefono" value="<?= $telefono_editar ?>" required>
					<label class="form--input__four__telefono">Teléfono: </label>
				</div>

				<div class="empty_four">
				</div>

				<div class="form--input__four__two">
					<input class="form--input__four__email" type="email" name="email" id="email" value="<?= $email_editar ?>" required>
					<label class="form--input__four__correo">E-mail: </label>
				</div>

				<div class="empty_four">
				</div>

				<div class="form--input__four__three">
					<input class="form--input__four__birth" type="date" name="cumple" id="cumple" value="<?= $cumple_editar ?>" required>
					<label class="form--input__four__cumple">Cumpleaños: </label>
				</div>
			</div>
<!-- 4ta línea: Tel-Email-Cumpleaños. FIN. -->

<!-- 5ta línea: Estrato-Barrio-Sexo. INICIO. -->
			<div class="form--input__five">
				<div class="form--input__five__one">
					<select class="form--input__five__stratum" name="estrato" id="estrato" required>
						<option value="" <?= $estrato_editar == '' ? 'selected' : '' ?>></option>
						<option value="rural" <?= $estrato_editar == 'rural' ? 'selected' : '' ?>>Rural</option>
						<option value="uno" <?= $estrato_editar == 'uno' ? 'selected' : '' ?>>Uno</option>
						<option value="dos" <?= $estrato_editar == 'dos' ? 'selected' : '' ?>>Dos</option>
						<option value="tres" <?= $estrato_editar == 'tres' ? 'selected' : '' ?>>Tres</option>
						<option value="cuatro" <?= $estrato_editar == 'cuatro' ? 'selected' : '' ?>>Cuatro</option>
						<option value="cinco" <?= $estrato_editar == 'cinco' ? 'selected' : '' ?>>Cinco</option>
					</select>
					<label class="form--input__five__estrato">Estrato: </label>
				</div>

				<div class="empty_five">
				</div>

				<div class="form--input__five__two">
					<input class="form--input__five__neighborhood" type="text" name="barrio" id="barrio" value="<?= $barrio_editar ?>" required>
					<label class="form--input__five__barrio">Barrio: </label>
				</div>

				<div class="empty_five">
				</div>

				<div class="form--input__five__three">
					<select class="form--input__five__femmas" name="sexo" id="sexo" required>
						<option value="" <?= $sexo_editar == '' ? 'selected' : '' ?>></option>
						<option value="Femenino" <?= $sexo_editar == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
						<option value="Masculino" <?= $sexo_editar == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
						<option value="otro" <?= $sexo_editar == 'otro' ? 'selected' : '' ?>>Otro</option>
					</select>
					<label class="form--input__five__sexo">Sexo: </label>
				</div>
			</div>
<!--   5ta línea: Estrato-Barrio-Sexo. FIN.  -->

<!--   6ta línea: Dpto-Municipio. INICIO.  -->
			<div class="form--input__six">
				<div class="form--input__six__one">
					<select class="form--input__six__dpto" name="departamento" id="departamento" required>
						<option value="" <?= $departamento_editar == '' ? 'selected' : '' ?>></option>
						<option value="Amazonas" <?= $departamento_editar == 'Amazonas' ? 'selected' : '' ?>>Amazonas</option>
						<option value="Antioquia" <?= $departamento_editar == 'Antioquia' ? 'selected' : '' ?>>Antioquia</option>
						<option value="Arauca" <?= $departamento_editar == 'Arauca' ? 'selected' : '' ?>>Arauca</option>
						<option value="Atlántico" <?= $departamento_editar == 'Atlántico' ? 'selected' : '' ?>>Atlántico</option>
						<option value="Bolívar" <?= $departamento_editar == 'Bolívar' ? 'selected' : '' ?>>Bolívar</option>
						<option value="Boyacá" <?= $departamento_editar == 'Boyacá' ? 'selected' : '' ?>>Boyacá</option>
						<option value="Caldas" <?= $departamento_editar == 'Caldas' ? 'selected' : '' ?>>Caldas</option>
						<option value="Caquetá" <?= $departamento_editar == 'Caquetá' ? 'selected' : '' ?>>Caquetá</option>
						<option value="Casanare" <?= $departamento_editar == 'Casanare' ? 'selected' : '' ?>>Casanare</option>
						<option value="Cauca" <?= $departamento_editar == 'Cauca' ? 'selected' : '' ?>>Cauca</option>
						<option value="Cesar" <?= $departamento_editar == 'Cesar' ? 'selected' : '' ?>>Cesar</option>
						<option value="Chocó" <?= $departamento_editar == 'Chocó' ? 'selected' : '' ?>>Chocó</option>
						<option value="Córdoba" <?= $departamento_editar == 'Córdoba' ? 'selected' : '' ?>>Córdoba</option>
						<option value="Cundinamarca" <?= $departamento_editar == 'Cundinamarca' ? 'selected' : '' ?>>Cundinamarca</option>
						<option value="Guainía" <?= $departamento_editar == 'Guainía' ? 'selected' : '' ?>>Guainía</option>
						<option value="Guaviare" <?= $departamento_editar == 'Guaviare' ? 'selected' : '' ?>>Guaviare</option>
						<option value="Huila" <?= $departamento_editar == 'Huila' ? 'selected' : '' ?>>Huila</option>
						<option value="La Guajira" <?= $departamento_editar == 'La Guajira' ? 'selected' : '' ?>>La Guajira</option>
						<option value="Magdalena" <?= $departamento_editar == 'Magdalena' ? 'selected' : '' ?>>Magdalena</option>
						<option value="Meta" <?= $departamento_editar == 'Meta' ? 'selected' : '' ?>>Meta</option>
						<option value="Nariño" <?= $departamento_editar == 'Nariño' ? 'selected' : '' ?>>Nariño</option>
						<option value="Norte de Santander" <?= $departamento_editar == 'Norte de Santander' ? 'selected' : '' ?>>Norte de Santander</option>
						<option value="Putumayo" <?= $departamento_editar == 'Putumayo' ? 'selected' : '' ?>>Putumayo</option>
						<option value="Quindío" <?= $departamento_editar == 'Quindío' ? 'selected' : '' ?>>Quindío</option>
						<option value="Risaralda" <?= $departamento_editar == 'Risaralda' ? 'selected' : '' ?>>Risaralda</option>
						<option value="San Andrés" <?= $departamento_editar == 'San Andrés' ? 'selected' : '' ?>>San Andrés y Providencia</option>
						<option value="Santander" <?= $departamento_editar == 'Santander' ? 'selected' : '' ?>>Santander</option>
						<option value="Sucre" <?= $departamento_editar == 'Sucre' ? 'selected' : '' ?>>Sucre</option>
						<option value="Tolima" <?= $departamento_editar == 'Tolima' ? 'selected' : '' ?>>Tolima</option>
						<option value="Valle del Cauca" <?= $departamento_editar == 'Valle del Cauca' ? 'selected' : '' ?>>Valle del Cauca</option>
						<option value="Vaupes" <?= $departamento_editar == 'Vaupes' ? 'selected' : '' ?>>Vaupés</option>
						<option value="Vichada" <?= $departamento_editar == 'Vichada' ? 'selected' : '' ?>>Vichada</option>
					</select>
					<label class="form--input__six__departamento">Departamento: </label>
				</div>

				<div class="empty_six">
				</div>

				<div class="form--input__six__two">
					<select class="form--input__six__mcpio" name="municipio" id="municipio" required>
						<option value="" <?= $municipio_editar == '' ? 'selected' : '' ?>></option>
						<option value="Arauca" <?= $municipio_editar == 'Arauca' ? 'selected' : '' ?>>Arauca</option>
						<option value="Armenia" <?= $municipio_editar == 'Armenia' ? 'selected' : '' ?>>Armenia</option>
						<option value="Barranquilla" <?= $municipio_editar == 'Barranquilla' ? 'selected' : '' ?>>Barranquilla</option>
						<option value="Bogotá" <?= $municipio_editar == 'Bogotá' ? 'selected' : '' ?>>Bogotá</option>
						<option value="Bucaramanga" <?= $municipio_editar == 'Bucaramanga' ? 'selected' : '' ?>>Bucaramanga</option>
						<option value="Cali" <?= $municipio_editar == 'Cali' ? 'selected' : '' ?>>Cali</option>
						<option value="Cartagena" <?= $municipio_editar == 'Cartagena' ? 'selected' : '' ?>>Cartagena</option>
						<option value="Cúcuta" <?= $municipio_editar == 'Cúcuta' ? 'selected' : '' ?>>Cúcuta</option>
						<option value="Florencia" <?= $municipio_editar == 'Florencia' ? 'selected' : '' ?>>Florencia</option>
						<option value="Ibagué" <?= $municipio_editar == 'Ibagué' ? 'selected' : '' ?>>Ibagué</option>
						<option value="Leticia" <?= $municipio_editar == 'Leticia' ? 'selected' : '' ?>>Leticia</option>
						<option value="Manizales" <?= $municipio_editar == 'Manizales' ? 'selected' : '' ?>>Manizales</option>
						<option value="Medellín" <?= $municipio_editar == 'Medellín' ? 'selected' : '' ?>>Medellín</option>
						<option value="Mitú" <?= $municipio_editar == 'Mitú' ? 'selected' : '' ?>>Mitú</option>
						<option value="Mocoa" <?= $municipio_editar == 'Mocoa' ? 'selected' : '' ?>>Mocoa</option>
						<option value="Montería" <?= $municipio_editar == 'Montería' ? 'selected' : '' ?>>Montería</option>
						<option value="Neiva" <?= $municipio_editar == 'Neiva' ? 'selected' : '' ?>>Neiva</option>
						<option value="Pasto" <?= $municipio_editar == 'Pasto' ? 'selected' : '' ?>>Pasto</option>
						<option value="Pereira" <?= $municipio_editar == 'Pereira' ? 'selected' : '' ?>>Pereira</option>
						<option value="Popayán" <?= $municipio_editar == 'Popayán' ? 'selected' : '' ?>>Popayán</option>
						<option value="Puerto Carreño" <?= $municipio_editar == 'Puerto Carreño' ? 'selected' : '' ?>>Puerto Carreño</option>
						<option value="Puerto Inírida" <?= $municipio_editar == 'Puerto Inírida' ? 'selected' : '' ?>>Puerto Inírida</option>
						<option value="Quibdó" <?= $municipio_editar == 'Quibdó' ? 'selected' : '' ?>>Quibdó</option>
						<option value="Riohacha" <?= $municipio_editar == 'Riohacha' ? 'selected' : '' ?>>Riohacha</option>
						<option value="San Andrés" <?= $municipio_editar == 'San Andrés' ? 'selected' : '' ?>>San Andrés</option>
						<option value="San José del Guaviare" <?= $municipio_editar == 'San José del Guaviare' ? 'selected' : '' ?>>San José del Guaviare</option>
						<option value="Santa Marta" <?= $municipio_editar == 'Santa Marta' ? 'selected' : '' ?>>Santa Marta</option>
						<option value="Sincelejo" <?= $municipio_editar == 'Sincelejo' ? 'selected' : '' ?>>Sincelejo</option>
						<option value="Tunja" <?= $municipio_editar == 'Tunja' ? 'selected' : '' ?>>Tunja</option>
						<option value="Valledupar" <?= $municipio_editar == 'Valledupar' ? 'selected' : '' ?>>Valledupar</option>
						<option value="Villavicencio" <?= $municipio_editar == 'Villavicencio' ? 'selected' : '' ?>>Villavicencio</option>
						<option value="Yopal" <?= $municipio_editar == 'Yopal' ? 'selected' : '' ?>>Yopal</option>
					</select>
					<label class="form--input__six__municipio">Municipio: </label>
				</div>
			</div>
 <!-- 6ta línea: Dpto-Municipio. FIN. -->

 <!-- 7ma línea: Dirección-Nombre del Líder. INICIO.  -->
			<div class="form--input__seven">
				<div class="form--input__seven__one">
					<input class="form--input__seven__address" type="text" name="direccion" id="direccion" value="<?= $direccion_editar ?>" required>
					<label class="form--input__seven__direccion">Dirección de residencia: </label>
				</div>

				<div class="empty_seven">
				</div>

				<div class="form--input__seven__two">
					<select class="form--input__seven__nameleader" name="lider" id="lider" required>
						<option value=""></option>
						<option value="Santiago Ramírez" <?= $lider_editar == 'Santiago Ramírez' ? 'selected' : '' ?>>Santiago Ramírez</option>
						<option value="Alejandra Sánchez" <?= $lider_editar == 'Alejandra Sánchez' ? 'selected' : '' ?>>Alejandra Sánchez</option>
						<option value="Paola Gómez" <?= $lider_editar == 'Paola Gómez' ? 'selected' : '' ?>>Paola Gómez</option>
						<option value="Juan Pablo Pérez" <?= $lider_editar == 'Juan Pablo Pérez' ? 'selected' : '' ?>>Juan Pablo Pérez</option>
						<option value="Camilo López" <?= $lider_editar == 'Camilo López' ? 'selected' : '' ?>>Camilo López</option>
					</select>
					<label class="form--input__seven__lider">Nombre del líder: </label>
				</div>
			</div> 
<!-- 7ma línea: Dirección-Nombre del Líder. FIN.  -->

<!-- 8va línea: Sitio de Votación. INICIO.    --> 
			<div class="form--input__eight">
				<div class="form--input__eight__one">
					<input class="form--input__eight__place" type="text" name="sitio" id="sitio" value="<?= $sitio_editar ?>" required>
					<label class="form--input__eight__sitio">Sitio de votación: </label>
				</div>

				<div class="empty_eight">
				</div>

				<div class="form--input__eight__two">
					<input class="form--input__eight__table" type="number" name="mesa" id="mesa" value="<?= $mesa_editar ?>" required>
					<label class="form--input__eight__mesa">Mesa de votación: </label>
				</div>
			</div>
<!-- 8va línea: Sitio de Votación. FIN.  -->

<!-- 9na línea: Aceptar el Tratamiento de datos personales. INICIO. -->
			<div class="form--input__nine">
				<div class="form--input__nine__boxac">
					<input class="form--input__nine__accept" type="radio" name="tratamiento" id="tratamiento" value="Acepta" <?= ($tratamiento_editar === 'Aceptado') ? 'checked' : '' ?>
					<?= (empty($tratamiento_editar)) ? 'required' : '' ?>>
				</div>
					<label class="form--input__nine__dpersonales">Aceptar el tratamiento de datos personales: </label>
			
				<div class="form--input__ten">
						<input type="submit" id="btn-guardar" value="<?= $id_editar ? 'Actualizar' : 'Guardar' ?>" class="form--input__ten__guardar">
						<a href="index.php" class="form--input__ten__cancelar">Cancelar</a>
				</div>
			</div>


<!--   9na línea: Aceptar el Tratamiento de datos personales. FIN.  -->

		</form>
		<!-- INICIA TABLA DENTRO DE CUERPO. -->

		<h3 class="titulo-datos">Datos Ingresados:</h3>
		<div class="table-scroll">
			<table class="tabla-datos">
				<thead class="thead-one">
					<tr>
						<th class="item">ítem</th>
						<th class="tipo-doc">Tipo Doc</th>
						<th>Cédula</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Teléfono</th>
						<th>E-mail</th>
						<th>Cumpleaños</th>
						<th>Estrato</th>
						<th>Barrio</th>
						<th>Sexo</th>
						<th>Dpto.</th>
						<th>Municipio</th>
						<th>Dirección</th>
						<th>Líder</th>
						<th>Sitio</th>
						<th>Mesa</th>
						<th>Tto Datos</th>
						<th class="edit">Editar/Actualizar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					
					$consulta = mysqli_query($conn, "SELECT * FROM personas");

					while($row = mysqli_fetch_assoc($consulta)) {
						echo "<tr class='" . ($id_editar == $row['id_personas'] ? "resaltada" : "") . "'>";
						echo "<td>" . $row['id_personas'] . "</td>";
						echo "<td>" . $row['tipo'] . "</td>";
						echo "<td>" . $row['cedula'] . "</td>";
						echo "<td>" . $row['nombres'] . "</td>";
						echo "<td>" . $row['apellidos'] . "</td>";
						echo "<td>" . $row['telefono'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['cumple'] . "</td>";
						echo "<td>" . $row['estrato'] . "</td>";
						echo "<td>" . $row['barrio'] . "</td>";
						echo "<td>" . $row['sexo'] . "</td>";
						echo "<td>" . $row['departamento'] . "</td>";
						echo "<td>" . $row['municipio'] . "</td>";
						echo "<td>" . $row['direccion'] . "</td>";
						echo "<td>" . $row['lider'] . "</td>";
						echo "<td>" . $row['sitio'] . "</td>";
						echo "<td>" . $row['mesa'] . "</td>";
						echo "<td>" . $row['tratamiento'] . "</td>";
						echo "<td class='column-editar'>
                            	<a href='index.php?editar_id=" . $row['id_personas'] . "'>
                            	 	<button type='button' class='btn-edit'>Editar</button>
                            	</a>
                          	</td>";
						echo "</tr>";
					}

					mysqli_close($conn);
					?>
				</tbody>
			</table>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
		const cedulaInput = document.getElementById('cedula');
		const idInput = document.getElementById('id_personas');
		const botonGuardar = document.getElementById('btn-guardar');

		let mensajeError = document.createElement('div');
		mensajeError.id = 'mensaje-cedula-duplicada';
		mensajeError.style.color = 'red';
		mensajeError.style.fontWeight = 'bold';
		mensajeError.style.fontSize = '14px';
		mensajeError.style.marginBottom = '12px';
		mensajeError.style.marginTop = '-14px';
		mensajeError.style.display = 'none';
		mensajeError.classList.add('mensaje-error-cedula');

		const contenedorMensaje = document.querySelector('.form--empty__one');
		if (contenedorMensaje) {
			contenedorMensaje.appendChild(mensajeError);
		}

		cedulaInput.addEventListener('input', function (e) {
			let value = e.target.value.replace(/\D/g, '');
			value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
			e.target.value = value;

			let cedulaLimpia = value.replace(/\D/g, '');
			let id = idInput?.value || '';

			if (cedulaLimpia.length < 6) {
				mensajeError.style.display = 'none';
				botonGuardar.disabled = false;
				return;
			}

			const xhr = new XMLHttpRequest();
			xhr.open('POST', 'guardar.php', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.onload = function () {
				if (xhr.status === 200) {
					if (xhr.responseText.trim() === 'duplicada') {
						mensajeError.textContent = '⚠️ Ya existe un registro con esta Cédula.';
						mensajeError.style.display = 'block';
						botonGuardar.disabled = true;
						botonGuardar.style.backgroundColor = '#ccc';
						botonGuardar.style.color = '#333'; 
						botonGuardar.style.cursor = 'not-allowed';
					} else {
						mensajeError.style.display = 'none';
						botonGuardar.disabled = false;
						botonGuardar.style.backgroundColor = ''; 
						botonGuardar.style.color = '';  
						botonGuardar.style.cursor = 'pointer';
					}
				}
			};
			xhr.send('verificar_cedula=1&cedula=' + cedulaLimpia + '&id_personas=' + id);
		});
	});
	</script>
</body>
</html>
