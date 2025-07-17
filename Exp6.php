<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Student Name: " . $_POST["name"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    if (isset($_POST["hobbies"])) {
        echo "Hobbies: " . implode(", ", $_POST["hobbies"]) . "<br>";
    }
    echo "Department: " . $_POST["department"] . "<br>";
}
?>
<form method="post" action="">
    Name: <input type="text" name="name"><br>
    Gender:
    <input type="radio" name="gender" value="Male">Male 
    <input type="radio" name="gender" value="Female">Female<br>
    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Sports">Sports
    <input type="checkbox" name="hobbies[]" value="Music">Music<br>
    Department:
    <select name="department">
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
    </select><br>
    <input type="submit" value="Submit">
</form>
