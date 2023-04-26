<?php
$name = $_GET['name'];
$email = $_GET['email'];
$gender = $_GET['gender'];
// echo $name;
$conn = mysqli_connect('localhost', 'root', 'Pass1234', 'my_db');
if ($conn->connect_error) {
    echo "Connection error:" . $conn->connect_error;
} else {
    echo "Connection is created successfully";
    $sql = "INSERT INTO my_table (name,email,gender) VALUES
(\"$name\",\"$email\", \"$gender\")";
    $rs = mysqli_query($conn, $sql);
}
