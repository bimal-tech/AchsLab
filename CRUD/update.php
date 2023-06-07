<?php
$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
// echo $name;
$connection = mysqli_connect('localhost', 'root', '', 'my_dbs');
if ($connection->connect_error) {
    echo "Connection error:" . $connection->connect_error;
} else {
    echo "Connection is created successfully";
    $query = "UPDATE  my_table SET name = ?, email = ? WHERE id = ?";

    $stmt = $connection->prepare($query);

    $stmt->bind_param('sss', $name, $email, $id);

    $stmt->execute();

    header("Location: index2.php");
}
