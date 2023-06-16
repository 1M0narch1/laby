<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "clock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];

$sql = "DELETE FROM watch WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Удаление прошло успешно";
} else {
echo "Ошибка удаления" . $conn->error;
}

header("Location: index.php");
exit;

$conn->close();
?>
