<?php
    include 'conf/connection.php';

    $sql = "SELECT max(Movie_ID) FROM Movie";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo "Max item : " .$row['max(Movie_ID)'];

    $conn->close();

 ?>
