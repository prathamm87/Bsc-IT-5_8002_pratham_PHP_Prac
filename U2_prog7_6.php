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

        $sql = "SELECT SUBSTR('Hello PHP',1,5) AS Result";

        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<b>Substring : </b>" . $row['Result'];
            }
        } else {
            echo "Query Error : " . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>