<?php

session_start();

if (!isset($_SESSION['rollno'])) {
    header('Location: Dashboard.php');
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $rollno = $_POST["rollno"];
    $password = $_POST["password"];

    $host = "127.0.0.1";
    $dbUsername = "root";
    $dbpassword = "";
    $dbname = "sistk";

    // Create connection    
    $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM login WHERE rollno = ? AND password = ?");
    $stmt->bind_param("ss", $rollno, $password);

    $stmt->execute();

    // Your database connection and query here...

    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){
        // login successful - set session variable and redirect to dashboard
        $_SESSION['rollno'] = $rollno;
        header('Location: Dashboard.php');
        exit;
    } else {
        // login failed - redirect to error page
        header('Location: Error.html?error=Invalid roll number or password.');
        exit;
    }

    $stmt->close();
    $conn->close();
    
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
