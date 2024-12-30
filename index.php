<?php

$students = array(
    array("Name" => "Alaa", "Email" => "ahmed@test.com", "Track" => "CMS"),
    array("Name" => "Shamy", "Email" => "ali@test.com", "Track" => "PHP"),
    array("Name" => "Youssef", "Email" => "basem@test.com", "Track" => "PHP"),
    array("Name" => "Waleid", "Email" => "farouk@test.com", "Track" => "CMS"),
    array("Name" => "Rahma", "Email" => "hany@test.com", "Track" => "PHP")
);

echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Track</th></tr>";
foreach ($students as $student) {
    $rowColor = ($student["Track"] == "CMS") ? "red" : ""; 

    echo "<tr style='background-color: $rowColor;'>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Email"] . "</td>";
    echo "<td>" . $student["Track"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>