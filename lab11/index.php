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
    <h1>часы</h1>
    <table border="1">
        <tr>
            <th>Название</th>
            <th>Часовой механизм</th>
            <th>Колво стрелок</th>
            <th></th>
        </tr>
        <?php

        $conn = new mysqli("localhost", "root", "root", "clock");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
     
        $sql = "SELECT * FROM watch";
        $result = $conn->query($sql);
       
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["clockwork"] . "</td>";
                echo "<td>" . $row["numberOfArrows"] . "</td>";
                echo "<td><a href='deleate_person.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
    <br>
    <a href="add_person.php">Добавить новые часы</a>
</body>
</html>
