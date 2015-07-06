<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Registro de Ausencias, tardías, escapadas - Formoid html form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-true" style="background-color:#dee4eb">



<!-- Start Formoid form-->
<link rel="stylesheet" href="ausenciastardiasescapadas_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="ausenciastardiasescapadas_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:580px;min-width:150px" method="post"action="AgregarAsistencia.php"><div class="title"><h2>Registro de Ausencias, tardías, escapadas</h2></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Carnet" required="required" placeholder="Ingrese el Id del estudiante"/><span class="icon-place"></span></div></div>
	<div class="element-date"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" required="required" placeholder="Fecha"/><span class="icon-place"></span></div></div>
	<div class="element-multiple"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><select data-no-selected="Tipo:" name="Tipo" multiple="multiple" required="required">

		<option value="1">Ausencia</option>
		<option value="2">Tardía</option>
		<option value="3">Escapada</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Curso" required="required" placeholder="Ingrese Id del curso"/><span class="icon-place"></span></div></div><nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="IndexProfesor.php"><h1>Volver</h1></a></li>
          </ul>
        </nav>
<div class="submit"><input type="submit" value="Aceptar"/></div>



</form><p class="frmd"><a href="http://formoid.com/v29.php">html form</a> Formoid.com 2.9</p><script type="text/javascript" src="ausenciastardiasescapadas_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
