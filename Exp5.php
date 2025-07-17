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
