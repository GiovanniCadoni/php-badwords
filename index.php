<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Inserisci un paragrafo e una parola da censurare:
    </h1>

    <form action="censored.php" method="GET">
        <label for="paragraph">Il paragrafo:</label>
        <input type="text" id="paragraph" name="paragraph">
        <hr>

        <label for="cens-word">La parola da censurare:</label>
        <input type="text" id="cens-word" name="cens-word">
        <hr>

        <button type="submit">Visualizza</button>
    </form>

</body>
</html>