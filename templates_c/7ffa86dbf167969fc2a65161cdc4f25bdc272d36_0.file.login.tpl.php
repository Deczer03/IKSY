<?php
/* Smarty version 4.2.0, created on 2025-01-14 22:34:55
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6786d87f88f744_50834979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ffa86dbf167969fc2a65161cdc4f25bdc272d36' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\login.tpl',
      1 => 1736890284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6786d87f88f744_50834979 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><p style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
<form method="post">
    <label>Benutzername:
        <input type="text" name="username" required>
    </label>
    <br>
    <label>Passwort:
        <input type="password" name="password" required>
    </label>
    <br>
    <button type="submit">Einloggen</button>
</form>
</body>
</html>
<?php }
}
