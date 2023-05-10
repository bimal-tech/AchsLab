<?php
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$roll = $_POST['roll'];
// echo $name;
$connection = mysqli_connect('localhost', 'root', 'Pass1234', 'my_dbs');
if ($connection->connect_error) {
    echo "Connection error:" . $connection->connect_error;
} else {
    echo "Connection is created successfully";
    $query = "INSERT INTO my_table (name,email,gender,roll,class) VALUES (?,?,?,?,?)";

    $stmt = $connection->prepare($query);

    $stmt->bind_param('sssss', $name, $email, $gender,$roll,$class);

    $stmt->execute();

    header("Location: /achs2");
}
