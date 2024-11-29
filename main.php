<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosta aplikacja PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f9;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
            font-size: 16px;
        }
        button {
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f3e7;
            border: 1px solid #4CAF50;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Prosta aplikacja webowa</h1>
    <p>Wprowadź tekst w poniższe pole i kliknij przycisk, aby wyświetlić zawartość.</p>

    <form method="post" action="">
        <input type="text" name="user_input" placeholder="Wpisz coś tutaj..." required>
        <button type="submit">Wyślij</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Pobierz dane z formularza
        $userInput = htmlspecialchars($_POST['user_input']); // Sanityzacja danych
        if (!empty($userInput)) {
            echo "<div class='output'><strong>Wprowadziłeś:</strong> " . $userInput . "</div>";
        } else {
            echo "<div class='output'>Nie wpisano żadnego tekstu.</div>";
        }
    }
    ?>
</body>
</html>
