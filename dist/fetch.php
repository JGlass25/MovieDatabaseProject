<?php
$connect = mysqli_connect("3.89.186.66", "team2", "password_XZD_2", "team2_db");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT * FROM Movie WHERE Movie_title LIKE '%".$request."%'
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["Movie_title"];
 }
 echo json_encode($data);
} else {
    echo json_encode(null);
}


?>
