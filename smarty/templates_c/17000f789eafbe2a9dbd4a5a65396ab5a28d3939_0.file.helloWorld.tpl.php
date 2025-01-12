<?php
/* Smarty version 4.2.0, created on 2025-01-12 18:31:41
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\helloWorld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6783fc7d23b802_94013232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17000f789eafbe2a9dbd4a5a65396ab5a28d3939' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\helloWorld.tpl',
      1 => 1736701311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6783fc7d23b802_94013232 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <h2>Euro-Dollar Umrechnung</h2>
    <form name="euro1" action="./index.php" method="post">
        <label for="i_kurs">Kurs</label>
        <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
        <label for="i_eurobetrag">Euros</label>
        <input type="number" name="eurobetrag" id="i_eurobetrag" size=12 step="0.01"><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
</body>
</html><?php }
}
