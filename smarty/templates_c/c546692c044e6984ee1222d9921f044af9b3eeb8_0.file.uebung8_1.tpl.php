<?php
/* Smarty version 4.2.0, created on 2025-01-12 23:27:05
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\uebung8_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_678441b931fba3_51916571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c546692c044e6984ee1222d9921f044af9b3eeb8' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\uebung8_1.tpl',
      1 => 1736720816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678441b931fba3_51916571 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Darlehenskondition</title>
    <link rel="stylesheet" href="css/Forms.css" type="text/css">
</head>
<body>
<div>
    <h1>Darlehenskondition</h1>
    <form name="darlehenskondition" action="index.php" method="post">
        <label for="i_eigenkapital">Eigenkapital in €</label>
        <input type="number" name="eigenkapital" id="i_eigenkapital" min="1"><br>
        <label for="i_immopreis">Immobilienpreis</label>
        <input type="number" name="immopreis" id="i_immopreis" min="1">
        <input type="submit" value="Submit">
    </form>
</div>
<div>
    <p>
        <?php if (((isset($_smarty_tpl->tpl_vars['unterdreissigprozent']->value)))) {?>
                Die Eigenkapitalquote ist zu gering, um die immobilie zu finanzieren!
        <?php } else { ?>
            Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immopreis']->value;?>
€<br>
            Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
€<br>
            <br>
            Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
€<br>
        <?php }?>
    </p>
</div>
</body>
</html><?php }
}
