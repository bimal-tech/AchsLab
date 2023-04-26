<!DOCTYPE html>
<html lang="en">

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
</body>

</html>