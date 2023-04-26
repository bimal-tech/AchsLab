<?php
$name = $_GET['name'];
$email = $_GET['email'];
$gender = $_GET['gender'];
// echo $name;
$connection = mysqli_connect('localhost', 'root', 'Pass1234', 'my_db');
if ($connection->connect_error) {
    echo "Connection error:" . $connection->connect_error;
} else {
    echo "Connection is created successfully";
    $query = "INSERT INTO my_table (name,email,gender) VALUES (?,?,?)";

    $stmt = $connection->prepare($query);

    $stmt->bind_param('sss', $name, $email, $gender);

    $stmt->execute();

    header("Location: /achs");
}
