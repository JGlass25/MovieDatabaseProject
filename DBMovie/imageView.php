<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "DBposter_local";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " .  $conn->connect_error);

} else {
    // echo "Connected successfully";
}
    if(isset($_GET['poster_id'])) {
        $sql = "SELECT image FROM poster WHERE poster_id=" . $_GET['poster_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		// header("Content-type: " . $row["imageType"]);
        echo $row["image"];
	}
	mysqli_close($conn);
?>
