<?php
/* Smarty version 4.2.0, created on 2025-01-14 19:31:14
  from 'C:\Users\czern\PhpstormProjects\IKSY_Uebung\uebung9_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6786ad7209df66_01631464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf42a1c7d6e30c00ed4fd277eff746d5d631d0b' => 
    array (
      0 => 'C:\\Users\\czern\\PhpstormProjects\\IKSY_Uebung\\uebung9_2.tpl',
      1 => 1736767206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6786ad7209df66_01631464 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darlehenskondition</title>
    <link rel="stylesheet" href="css/Forms.css" type="text/css">
</head>
<body>
<div>
    <h1>Darlehenskondition</h1>
    <form name="darlehenskondition" action="index.php" method="post">
        <label for="i_eigenkapital">Eigenkapital in €</label>
        <input type="number" name="eigenkapital" id="i_eigenkapital" min="1" required><br>
        <label for="i_immopreis">Immobilienpreis in €</label>
        <input type="number" name="immopreis" id="i_immopreis" min="1" required><br>
        <label>Ausgabe als PDF?</label>
        <input type="checkbox" name="pdf"><br>
        <input type="submit" value="Berechnen">
    </form>
</div>

<div>
    <p>
        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        <?php } else { ?>
            Immobilienpreis: <?php echo $_smarty_tpl->tpl_vars['immopreis']->value;?>
€<br>
            Eigenkapital: <?php echo $_smarty_tpl->tpl_vars['eigenkapital']->value;?>
€<br>
            Zinssatz: <?php echo $_smarty_tpl->tpl_vars['zinssatz']->value;?>
%<br>
            Monatliche Belastung: <?php echo $_smarty_tpl->tpl_vars['monatlicheBelastung']->value;?>
€
        <?php }?>
    </p>
</div>
</body>
</html>
<?php }
}
