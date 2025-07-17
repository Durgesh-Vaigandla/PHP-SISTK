<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Username: " . $_POST["username"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "Interests: ";
    if (isset($_POST["interests"])) {
        echo implode(", ", $_POST["interests"]);
    }
    echo "<br>Country: " . $_POST["country"] . "<br>";
}
?>
<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Email: <input type="email" name="email"><br>
    Gender:
    <input type="radio" name="gender" value="Male">Male 
    <input type="radio" name="gender" value="Female">Female<br>
    Interests:
    <input type="checkbox" name="interests[]" value="Programming">Programming
    <input type="checkbox" name="interests[]" value="Sports">Sports
    <input type="checkbox" name="interests[]" value="Music">Music<br>
    Country:
    <select name="country">
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select><br>
    <input type="submit" value="Register">
</form>
