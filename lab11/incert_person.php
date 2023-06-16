<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "clock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$clockwork = $_POST["clockwork"];
$numberOfArrows = $_POST["numberOfArrows"];

$sql = "INSERT INTO watch (name, clockwork, numberOfArrows)
VALUES ('$name', '$clockwork', '$numberOfArrows')";


if ($conn->query($sql) === TRUE) {
    echo "Выполненно без ошибок";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}
header("Location: index.php");
exit;
$conn->close();
?>
