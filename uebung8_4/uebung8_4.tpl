<!doctype html>
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
        {if (isset($unterdreissigprozent))}
            Die Eigenkapitalquote ist zu gering, um die immobilie zu finanzieren!
        {elseif (isset($sechzigprozent))}
            Immobilienpreis: {$immopreis}€<br>
            Eigenkapital: {$eigenkapital}€<br>
            <br>
            Zinssatz ist auf 4% runtergegangen<br>
            <br>
            Monatliche Belastung: {$monatlicheBelastung}€
        {elseif (isset($fuenfzigprozent))}
            Immobilienpreis: {$immopreis}€<br>
            Eigenkapital: {$eigenkapital}€<br>
            <br>
            Zinssatz ist auf 4,5% runtergegangen<br>
            <br>
            Monatliche Belastung: {$monatlicheBelastung}€
        {else}
            Immobilienpreis: {$immopreis}€<br>
            Eigenkapital: {$eigenkapital}€<br>
            <br>
            Monatliche Belastung: {$monatlicheBelastung}€
        {/if}
    </p>
</div>
</body>
</html>