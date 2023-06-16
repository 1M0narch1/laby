<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "clock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, clockwork, numberOfArrows FROM watch";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Выводим данные каждой записи
    while($row = $result->fetch_assoc()) {
        echo "" . $row["id"]. " - Name: " . $row["name"]. " - clockwork: " . $row["clockwork"]. " - numberOfArrows: " . $row["numberOfArrows"]. "<br>";
    }
} else {
    echo "0 Результатов";
}


$conn->close();
?>
