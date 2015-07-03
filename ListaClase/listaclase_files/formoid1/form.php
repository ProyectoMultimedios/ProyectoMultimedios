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
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:16px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:580px;min-width:150px" method="post"><div class="title"><h2>Registro de notas</h2></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Cotidiano:"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input1" required="required" placeholder="Ingrese el cotidiano"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>" title="Parcial I:"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input3" required="required" placeholder="Ingrese parcial"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Parcial II:"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input" required="required" placeholder="Ingrese el parcial II:"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input4"); ?>" title="Id Estudiante:"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input4" required="required" placeholder="Ingrese el id del estudiante"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input5"); ?>" title="Id curso profesor:"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input5" required="required" placeholder="Ingrese el id del profesor"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Aceptar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
