<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'my_dbs');
$query = "Delete from my_table where id='$id'";
$result = mysqli_query($connection, $query);
header("Location: index2.php");
