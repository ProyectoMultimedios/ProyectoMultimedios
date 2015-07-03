<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Registro estudiante - Formoid javascript form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="index_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="index_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:1000px;min-width:150px" method="post"><div class="title"><h2>Registro estudiante</h2></div>
	<div class="element-name"><label class="title"></label><span class="nameFirst"><input placeholder=" Nombre" type="text" size="8" name="name[first]" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Primer apellido" type="text" size="14" name="name[last]" /><span class="icon-place"></span></span></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="segundo apellido"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Carnet"/><span class="icon-place"></span></div></div>
	<div class="element-date"><label class="title"></label><div class="item-cont"><input class="small" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Fecha Nacimiento"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox"><label class="title">Genero</label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Femenino"/ ><span>Femenino</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Masculino"/ ><span>Masculino</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Dirección"/><span class="icon-place"></span></div></div>
	<div class="element-phone"><label class="title"></label><div class="item-cont"><input class="small" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Telefono" value=""/><span class="icon-place"></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Información del Encargado</h3></div>
	<div class="element-name"><label class="title"></label><span class="nameFirst"><input placeholder=" Nombre" type="text" size="8" name="name1[first]" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Primer Apellido" type="text" size="14" name="name1[last]" /><span class="icon-place"></span></span></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="small" type="text" name="input3" placeholder="Segundo apellido"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox"><label class="title">Sexo</label>		<div class="column column2"><label><input type="checkbox" name="checkbox1[]" value="Masculino	"/ ><span>Masculino	</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox1[]" value="Femenino"/ ><span>Femenino</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-phone"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone1" placeholder="Telefono" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input5" placeholder="Dirección"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input4" placeholder="Input Text"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form</a> Formoid.com 2.9</p><script type="text/javascript" src="index_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
