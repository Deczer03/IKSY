<?php
/* Smarty version 4.2.0, created on 2025-01-13 00:01:58
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\uebung8_4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_678449e6b8cdb7_84061595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c49cae35dcb1825be4882c2d29186dfadd8c79c' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\uebung8_4.tpl',
      1 => 1736722913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678449e6b8cdb7_84061595 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php } elseif (((isset($_smarty_tpl->tpl_vars['sechzigprozent']->value)))) {?>
            Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immopreis']->value;?>
€<br>
            Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
€<br>
            <br>
            Zinssatz ist auf 4% runtergegangen<br>
            <br>
            Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
€
        <?php } elseif (((isset($_smarty_tpl->tpl_vars['fuenfzigprozent']->value)))) {?>
            Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immopreis']->value;?>
€<br>
            Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
€<br>
            <br>
            Zinssatz ist auf 4,5% runtergegangen<br>
            <br>
            Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
€
        <?php } else { ?>
            Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immopreis']->value;?>
€<br>
            Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
€<br>
            <br>
            Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
€
        <?php }?>
    </p>
</div>
</body>
</html><?php }
}
