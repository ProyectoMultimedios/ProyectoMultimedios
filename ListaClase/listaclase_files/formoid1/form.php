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
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-flat-blue" style="background-color:#FFFFFF;font-size:17px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#00007f;max-width:800px;min-width:150px" method="post"><div class="title"><h2>Lista de clases</h2></div>
	<div class="element-multiple<?php frmd_add_class("multiple"); ?>"><label class="title">Grupo:<span class="required">*</span></label><div class="medium"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" required="required">

		<option value="Grupo 1">Grupo 1</option>
		<option value="Grupo 2">Grupo 2</option>
		<option value="Grupo 3">Grupo 3</option></select></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple1"); ?>"><label class="title">Materia:<span class="required">*</span></label><div class="medium"><select data-no-selected="Nothing selected" name="multiple1[]" multiple="multiple" required="required">

		<option value="Español">Español</option>
		<option value="Matematicas">Matematicas</option>
		<option value="Ciencias">Ciencias</option></select></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple2"); ?>"><label class="title">Nivel:<span class="required">*</span></label><div class="medium"><select data-no-selected="Nothing selected" name="multiple2[]" multiple="multiple" required="required">

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option></select></div></div>
<div class="submit"><input type="submit" value="Generar PDF"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-flat-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
