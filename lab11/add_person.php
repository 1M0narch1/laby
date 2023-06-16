<!DOCTYPE html>
<html>
<head>
<title>Radio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Добавить новую станцию</h2>
    <form action="incert_person.php" method="post">
        
        <label for="name">Название:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="clockwork">Часовой механизм:</label><br>
        <input type="text" name="clockwork" id="clockwork" required><br><br>

        <label for="numberOfArrows">Количесво стрелок:</label><br>
        <input name="numberOfArrows" id="numberOfArrows" required></input><br><br>

        <input type="submit" value="добавить">
    </form>
</body>
</html>