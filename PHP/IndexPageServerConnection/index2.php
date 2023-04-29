<?php
$connection = mysqli_connect('localhost', 'root', 'Pass1234', 'my_db');
$query = "Select * from my_table";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_all($result);
// var_dump($data);
?>
<table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
    </thead>
    <tbody>
        <?php
        // for ($i = 0; $i < count($data); $i++) {
        //     echo "
        //     <tr>
        //     <td>{$data[$i][0]}</td>
        //     <td>{$data[$i][1]}</td>
        //     <td>{$data[$i][2]}</td>
        //     </tr>";
        // }
        foreach($data as $individual_data) {
            echo "
            <tr>
            <td>{$individual_data[0]}</td>
            <td>{$individual_data[1]}</td>
            <td>{$individual_data[2]}</td>
            </tr>";
        }
        ?>
    </tbody>
</table>


<!-- $data=[
[name,email,gender],
[name,email,gender],
[name,email,gender]
] -->