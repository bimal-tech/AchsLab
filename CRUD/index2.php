<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_dbs');
$query = "Select * from my_table";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_all($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        th,
        td {
            padding: 20px;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;

        }
    </style>
</head>

<body>
    <form action="script.php" method="GET">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">female</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>

    <table>
        <thead>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($row as $data)
                echo "<tr>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>
            <a href='delete.php?id=$data[0]'>Delete</a>
            <a href='edit.php?id=$data[0]'>Edit</a>
            </td>
            </tr>"
            ?>
        </tbody>
    </table>
</body>


</html>