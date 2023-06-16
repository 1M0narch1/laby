<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "clock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO watch (name, clockwork, numberOfArrows) 
VALUES ('котлы с рынка', 'мех', '8'), 
       ('лучи', 'мех', '3'), 
       ('аппле', 'смарт', '0')";


if ($conn->multi_query($sql) === TRUE) {
    echo "Пользователи созданы";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
