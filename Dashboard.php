<?php
session_start();
if (!isset($_SESSION['rollno'])) {
    echo 'Session rollno is not set.';
    header('Location: index.html');
    exit;
} else {
    echo 'Session rollno is set: ' . $_SESSION['rollno'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Success</h1>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>