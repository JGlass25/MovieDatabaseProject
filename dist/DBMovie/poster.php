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

 $sql = "select Movie_title, poster_id from Movie join Poster P on Movie.Movie_id = P.Movie_Movie_id";

              $result = $conn->query($sql);

              if ($result -> num_rows > 0) {
                  echo " <table class='table-dark table-striped'>
                            <tbody>
                              <tr>
                                <td><center><h5>&emsp; Title &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Poster &emsp;</h5></center></td>
                              </tr>
                          ";
	}
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                      ?>
                <tr>
                  <td> <?php echo $row['Movie_title'] ?> </td>
                  <td> <center><img src="imageView.php?poster_id=<?php echo $row["poster_id"]; ?>" /></center></td>
                </tr>
              <?php
                  echo "</tbody></table>";
               } 
              $conn->close();
        ?>