<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:1400px;min-width:150px" method="post"><div class="title"><h2>Estudiante</h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"><span class="required">*</span></label><span class="nameFirst"><input placeholder=" Nombre" type="text" size="8" name="name[first]" required="required"/><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Apellido" type="text" size="14" name="name[last]" required="required"/><span class="icon-place"></span></span></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="small" type="text" name="input2" required="required" placeholder="Carnet"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Sexo</label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Masculino"/ ><span>Masculino</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Femenino"/ ><span>Femenino</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-name<?php frmd_add_class("name1"); ?>"><label class="title"></label><span class="nameFirst"><input placeholder=" Nombre Encargado" type="text" size="8" name="name1[first]" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Apellido Encargado" type="text" size="14" name="name1[last]" /><span class="icon-place"></span></span></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input3" placeholder="Identificación"/><span class="icon-place"></span></div></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Telefono" value=""/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
