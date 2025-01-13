<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
{if $error}<p style="color:red;">{$error}</p>{/if}
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
