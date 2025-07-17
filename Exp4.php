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
