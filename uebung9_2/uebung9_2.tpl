<!doctype html>
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
        {if isset($error)}
            {$error}
        {else}
            Immobilienpreis: {$immopreis}€<br>
            Eigenkapital: {$eigenkapital}€<br>
            Zinssatz: {$zinssatz}%<br>
            Monatliche Belastung: {$monatlicheBelastung}€
        {/if}
    </p>
</div>
</body>
</html>
