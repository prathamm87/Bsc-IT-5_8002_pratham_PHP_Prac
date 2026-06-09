<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("COLLEGE_NAME", "marwadi university");
$studentName = "pratham shinde";
$semester = "Semester 4";
$marks = 389;
$totalMarks = 500;
$percentage = ($marks / $totalMarks) * 100;
echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Marks Obtained: " . $marks . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>
</body>
</html>