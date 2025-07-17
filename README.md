# PHP-SISTK

## Instructions to Run PHP Programs on VS Code (Without XAMPP)

1. **Install VS Code Extensions:**
    - Install the extension `PHP Server` or `Live Server` from the VS Code marketplace.
    - Search for "PHP Server" and click 'Install'.
2. **Install PHP:**
    - Download PHP from the official [php.net] website and add PHP to your system's PATH environment variable.
3. **Create a Project Folder:**
    - Create a folder for your PHP files.
    - Save each PHP program (e.g., `hello.php`, `date.php`) in this folder.
4. **Open Folder in VS Code:**
    - Go to `File` → `Open Folder` and select your project folder.
5. **Run PHP File:**
    - Right-click the PHP file in VS Code.
    - Choose `PHP Server: Serve project` (or similar, depending on your extension).
    - Your browser will open and display the output of your PHP file.

## 1. Write a PHP program to display "Hello"

### Description

This simple PHP program outputs the word "Hello" on the browser. It demonstrates the basic syntax for embedding PHP in a file.

### Syntax

```php
<?php
echo "Hello";
?>
```


### Program

```php
<?php
echo "Hello";
?>
```


### Output

```
Hello
```


## 2. Write a PHP program to display today’s date

### Description

This program displays the current date. It uses the `date()` function in PHP to fetch and format the system date.

### Syntax

```php
<?php
echo date("Y-m-d");
?>
```


### Program

```php
<?php
echo "Today's date is: " . date("Y-m-d");
?>
```


### Output

```
Today's date is: 2025-07-17
```


## 3. Write a PHP program to display Fibonacci series

### Description

The Fibonacci series is a series of numbers in which each number is the sum of the two preceding ones. This program displays the Fibonacci sequence up to a specified count.

### Syntax

```php
<?php
// Fibonacci logic
?>
```


### Program

```php
<?php
$n = 10;
$f1 = 0;
$f2 = 1;
echo "Fibonacci Series: ";
for ($i = 0; $i < $n; $i++) {
    echo $f1 . " ";
    $next = $f1 + $f2;
    $f1 = $f2;
    $f2 = $next;
}
?>
```


### Output

```
Fibonacci Series: 0 1 1 2 3 5 8 13 21 34
```


## 4. Write a PHP Program to read the employee details

### Description

This program demonstrates how to read employee details from an array or input. It outputs the details in a structured way.

### Syntax

```php
<?php
// Reading array and displaying data
?>
```


### Program

```php
<?php
$employees = [
    ["id" => 101, "name" => "Alice", "salary" => 40000],
    ["id" => 102, "name" => "Bob", "salary" => 35000],
    ["id" => 103, "name" => "Charlie", "salary" => 45000]
];

echo "<b>Employee Details:</b><br>";
foreach ($employees as $emp) {
    echo "ID: " . $emp["id"] . ", ";
    echo "Name: " . $emp["name"] . ", ";
    echo "Salary: " . $emp["salary"] . "<br>";
}
?>
```


### Output

```
Employee Details:
ID: 101, Name: Alice, Salary: 40000
ID: 102, Name: Bob, Salary: 35000
ID: 103, Name: Charlie, Salary: 45000
```


## 5. Write a PHP program to prepare the student marks list

### Description

This program stores and displays the marks obtained by students in different subjects.

### Syntax

```php
<?php
// Array of student marks, display logic
?>
```


### Program

```php
<?php
$students = [
    ["name" => "Rahul", "marks" => [85, 78, 82]],
    ["name" => "Priya", "marks" => [91, 88, 90]],
    ["name" => "Karan", "marks" => [75, 70, 80]]
];

echo "<b>Student Marks List:</b><br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . " | Marks: ";
    foreach ($student["marks"] as $mark) {
        echo $mark . " ";
    }
    echo "<br>";
}
?>
```


### Output

```
Student Marks List:
Name: Rahul | Marks: 85 78 82 
Name: Priya | Marks: 91 88 90 
Name: Karan | Marks: 75 70 80 
```

## 6. Create a Student Registration Form (Text Box, Check Box, Radio Button, Select, Submit Button)

### Description

This experiment involves creating a PHP form with various input elements. On submission, the program should display the values entered by the user.

### Syntax

```php
<!-- HTML form in a PHP file -->
<form method="post" action="">
    <!-- input elements -->
</form>
<?php
// PHP to display submitted values
?>
```


### Program

```php
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
```


### Output (Sample)

```
Student Name: Rahul
Gender: Male
Hobbies: Sports, Music
Department: CSE
```


## 7. Create Website Registration Form (Text Box, Check Box, Radio Button, Select, Submit Button) and Display Data

### Description

This is similar to the previous experiment but presented as a typical website registration form.

### Syntax

```php
<!-- HTML registration form with PHP to handle POST -->
```


### Program

```php
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
```


### Output (Sample)

```
Username: Priya
Email: priya@example.com
Gender: Female
Interests: Programming, Music
Country: India
```


## 8. Write PHP Script to Demonstrate Passing Variables with Cookies

### Description

Demonstrates how to set a cookie and read its value using PHP.

### Syntax

```php
// setcookie('name', 'value', time()+expire);
// $_COOKIE['name']
```


### Program

```php
<?php
if (!isset($_COOKIE["user"])) {
    setcookie("user", "Student123", time() + 3600); // 1 hour expiry
    echo "Cookie 'user' set! Refresh the page.<br>";
} else {
    echo "Value of 'user' cookie: " . $_COOKIE["user"] . "<br>";
}
?>
```


### Output

```
Cookie 'user' set! Refresh the page.

# On Refresh:
Value of 'user' cookie: Student123
```


## 9. Write a PHP Script to Connect MySQL Server from Your Website

### Description

This script demonstrates connecting to a MySQL database with PHP and checks for a successful connection.

### Syntax

```php
// mysqli_connect("hostname", "username", "password", "database");
```


### Program

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
```


### Output

```
Connected successfully
```


## 10. Write a Program to Keep Track of How Many Times a Visitor Has Loaded the Page

### Description

Uses PHP sessions to count and display the number of times a user has loaded/reloaded the page.

### Syntax

```php
// session_start();
// $_SESSION['count']
```


### Program

```php
<?php
session_start();
if (isset($_SESSION['count'])) {
    $_SESSION['count'] += 1;
} else {
    $_SESSION['count'] = 1;
}
echo "Page loaded: " . $_SESSION['count'] . " time(s).";
?>
```


### Output

```
Page loaded: 1 time(s).
# After Reload:
Page loaded: 2 time(s).
```