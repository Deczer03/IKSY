<?php
/* Smarty version 4.2.0, created on 2025-01-14 19:42:18
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\produktFlyer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6786b00abf79c4_46817584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084242b38f037184b859e53ee27f62e073981892' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\produktFlyer.tpl',
      1 => 1736880136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6786b00abf79c4_46817584 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Erzeugung eines Flyers</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
<?php if (((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value)))) {?>
    <form name='euro' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
        <label for="i_kurs">Kurs</label>
        <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
<?php }?>
</body>
</html><?php }
}
