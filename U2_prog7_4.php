<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "test");

        if ($conn->connect_error) {
            die("Connection Failed : " . $conn->connect_error);
        }

        $sql = "SELECT
        TRIM('   Hello PHP   ') AS Trimmed,
        LTRIM('   Hello PHP') AS LTrimmed,
        RTRIM('Hello PHP   ') AS RTrimmed";

        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "TRIM : " . $row['Trimmed'] . "<br>";
                echo "LTRIM : " . $row['LTrimmed'] . "<br>";
                echo "RTRIM : " . $row['RTrimmed'];
            }
        } else {
            echo "Query Error : " . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>