<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Lista de clases - Formoid bootstrap form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="listaclase_files/formoid1/formoid-flat-blue.css" type="text/css" />
<script type="text/javascript" src="listaclase_files/formoid1/jquery.min.js"></script>
<form class="formoid-flat-blue" style="background-color:#FFFFFF;font-size:17px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#00007f;max-width:800px;min-width:150px" method="post"action="IngresarNotas.php"><div class="title"><h2>Lista de clases</h2></div>

        <div class="element-multiple"><label class="title">Nivel:<span class="required">*</span></label><div class="medium"><select data-no-selected="Seleccionar Nivel" name="multiple2[]" multiple="multiple" required="required">

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option></select></div></div>


        <div class="element-multiple"><label class="title">Grupo:<span class="required">*</span></label><div class="medium"><select data-no-selected="Seleccionar Grupo" name="multiple[]" multiple="multiple" required="required">

		<option value="Grupo 1">Grupo 1</option>
		<option value="Grupo 2">Grupo 2</option>
		<option value="Grupo 3">Grupo 3</option></select></div></div>


        <div class="element-multiple"><label class="title">Materia:<span class="required">*</span></label><div class="medium"><select data-no-selected="Seleccionar Materia" name="multiple1[]" multiple="multiple" required="required">

		<option value="Español">Español</option>
		<option value="Matematicas">Matematicas</option>
		<option value="Ciencias">Ciencias</option></select></div></div>


<div class="submit"><input type="submit" value="Generar PDF"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">bootstrap form</a> Formoid.com 2.9</p><script type="text/javascript" src="listaclase_files/formoid1/formoid-flat-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
