<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_dbs');
$id = $_GET['id'];
$query = "Select * from my_table where id = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_all($result);
$data = $row[0];
?>
<html>

<body>

    <form action="update.php" method="POST">
        <label for="name">Name</label>
        <input type="hidden" value="<?php echo $data[0] ?>" name="id">
        <input type="text" name="name" id="name" value="<?php echo $data[1] ?>">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $data[2] ?>">

        <br>
        <button type="submit">Update</button>
    </form>

</body>

</html>