<?php
session_start();
if (isset($_SESSION['count'])) {
    $_SESSION['count'] += 1;
} else {
    $_SESSION['count'] = 1;
}
echo "Page loaded: " . $_SESSION['count'] . " time(s).";
?>
