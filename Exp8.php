<?php
if (!isset($_COOKIE["user"])) {
    setcookie("user", "Student123", time() + 3600); // 1 hour expiry
    echo "Cookie 'user' set! Refresh the page.<br>";
} else {
    echo "Value of 'user' cookie: " . $_COOKIE["user"] . "<br>";
}
?>
