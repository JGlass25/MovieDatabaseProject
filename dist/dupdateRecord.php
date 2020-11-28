<?php

	if (isset($_POST["updateRecord"])) {

		if ( isset($_GET["action"]) ) {

			if ( $_GET["action"] === "update" ) {

				// establish a connection and then delete

				$id = $_GET['id'];
                $date = $_GET['date'];


				include 'conf/connection.php'; // establish connection
                if($date == ''){
                    $sql = "UPDATE Director set deathdate = null WHERE Director_id = $id";
                } else {
                    $sql = "UPDATE Director set deathdate = '$date' WHERE Director_id = $id";
                }

                if ($conn->query($sql) === TRUE) {

                    echo "Director Updated successfully";

                } else {

                    echo "Error Updating record: " . $conn->error;
                  }

                $conn->query($sql);
                $conn->close();

                header("Location: "."updated.php");

			}
		}
	}
?>
