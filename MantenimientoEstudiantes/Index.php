<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Estudiante ucr </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

<!-- Start Formoid form-->
<link rel="stylesheet" href="index_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="index_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:1000px;min-width:150px" method="post" action="InsertarEstudiante.php"><div class="title"><h2>Estudiante</h2></div>

	<div class="element-name">

	<label class="title">
	<span class="required">*</span>
	</label>
	<label class="title">Información de Estudiante</label>
	<span class="nameFirst">

	<input placeholder=" Nombre" type="text" size="8" name="Nombre" required="required"/>         <span class="icon-place"></span></span><span class="nameLast"><input              placeholder="Apellido" type="text" size="14"name="Apellido" required="required"/><span class="icon-place"></span></span>
	</div>

	<div class="element-input">
	<label class="title"><span class="required">*</span></label>
	<div class="item-cont">
	<input class="Large" type="text" name="Apellido2" required="required" placeholder="Segundo Apellido"/>     <span class="icon-place"></span></div>
	</div>

	<div class="element-input">
	<label class="title"><span class="required">*</span></label>
	<div class="item-cont">
	<input class="Large" type="text" name="Carnet" required="required" placeholder="Carnet"/>     <span class="icon-place"></span></div>
	</div>

	<div class="element-checkbox"><label class="title">Sexo</label>
    <div class="column column2">
   <label><input type="checkbox" name="Genero" value="Masculino"/ ><span>Masculino</span>      </label>
   </div>
    <span class="clearfix"></span>
    <div class="column column2"><label><input type="checkbox" name="Genero"                      value="Femenino"/ ><span>Femenino</span></label></div>
    <span class="clearfix"></span>
    </div>

	<div class="element-name"><label class="title"></label><span class="nameFirst"><input         placeholder=" Nombre Encargado" type="text" size="8" name="NombreEncargado" /><span           class="icon-place"></span></span><span class="nameLast"><input placeholder=" Apellido         Encargado" type="text" size="14" name="ApellidoEncargado" /><span class="icon-place">        </span></span></div>

<div class="element-input">
	<label class="title"><span class="required">*</span></label>
	<div class="item-cont">
	<input class="Large" type="text" name="Apellido2Encargado" required="required" placeholder="Segundo Apellido"/><span class="icon-place"></span></div>
	</div>

	<div class="element-input"><label class="title"></label><div class="item-cont"><input         class="large" type="text" name="Identificacion" placeholder="Identificación"/><span           class="icon-place"></span></div></div>

	<div class="element-phone"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="Telefono" placeholder="Telefono" value=""/><span class="icon-place"></span></div></div>

<div class="submit"><input type="submit" value="Enviar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">bootstrap form</a> Formoid.com 2.9</p><script type="text/javascript" src="index_files/formoid1/formoid-solid-blue.js"></script>




</body>
</html>
