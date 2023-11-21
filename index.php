<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>

    <h2>Formularz logowania</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usernameInput = isset($_POST["username"]) ? $_POST["username"] : '';
        $passwordInput = isset($_POST["password"]) ? $_POST["password"] : '';

        if ($usernameInput === 'admin' && $passwordInput === 'test') {
            echo '<p style="color: green;">Logowanie udane! Witaj, ' . htmlspecialchars($usernameInput) . '!</p>';
        } else {
            echo '<p style="color: red;">Błąd logowania. Sprawdź wprowadzone dane.</p>';
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Login:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Zaloguj</button>
    </form>

</body>
</html>
