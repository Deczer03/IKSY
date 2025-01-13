<?php
/* Smarty version 4.2.0, created on 2025-01-14 22:35:32
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6786d8a46ed750_73229653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff505f1fe3a43bfdb49958357074ce760799995' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\dashboard.tpl',
      1 => 1736890347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6786d8a46ed750_73229653 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
<h1>Willkommen, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h1>
<p>Session-ID: <?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
</p>
<a href="logout.php">Ausloggen</a>
</body>
</html>
<?php }
}
