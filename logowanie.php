<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Portal laboratorium</h1>
    </header>
    <main class="main-login">
        <h2>Zaloguj się do systemu</h2>
        <form action="login.php" method="post">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login">
            <br>
            <label for="password">Hasło: </label>
            <input type="password" name="haslo" placeholder="Wpisz hasło">
            <button type="submit">Zaloguj</button>
        </form>
    </main>
    <footer>
        <p>Wykonał: numer_zdającego</p>
    </footer>
</body>
</html>