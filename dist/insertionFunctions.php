<?php
include 'conf/connection.php';



// add a record into paper entity
if(isset($_POST['insertIntoMovie'])){
    $mid = $_POST['Movie_ID'];
    $title = $_POST['Movie_title'];
    $runTime = $_POST['Runtime'];
    $rating = $_POST['Rating'];
    $year = $_POST['ReleaseYear'];
    $desc = $_POST['Description'];

    //echo $mid."; ".$title."; ".$runTime."; ".$rating."; ".$year."; ".$desc;
    $stmt = $conn->prepare("INSERT INTO Movie (Movie_id, Movie_title, Runtime, Rating, ReleaseYear, Description) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isisis", $mid, $title, $runTime, $rating, $year, $desc);

    $stmt->execute();

    $stmt->close();
    $conn->close();



    include("add.php");

    echo '<script language="javascript">';
    echo 'alert("record has been inserted into db successfully")';
    echo '</script>';
    
    header("Location: add.php");


}

?>
