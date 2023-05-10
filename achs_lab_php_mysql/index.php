<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <form action="script.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <br>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        
        <label for="class">Class</label>
        <select name="class" id="class">
            <option value="1">Class 1</option>
            <option value="2">Class 2</option>
            <option value="3">Class 3</option>
            <option value="4">Class 4</option>
            <option value="5">Class 5</option>
            <option value="6">Class 6</option>
            <option value="7">Class 7</option>
            <option value="8">Class 8</option>
            <option value="9">Class 9</option>
            <option value="10">Class 10</option>
        </select>

        <label for="roll">Roll no.</label>
        <input type="number" name="roll">
        
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">female</option>
        </select>
        
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>