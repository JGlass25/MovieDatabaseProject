<?php

	if (isset($_POST["updateRecord"])) {

		if ( isset($_GET["action"]) ) {

			if ( $_GET["action"] === "update" ) {

				// establish a connection and then delete

				$id = $_GET['id'];
                $date = $_GET['date'];


				include 'conf/connection.php'; // establish connection
                if($date == ''){
                    $sql = "UPDATE Actor set deathdate = null WHERE Actor_id = $id";
                } else {
                    $sql = "UPDATE Actor set deathdate = '$date' WHERE Actor_id = $id";
                }

                if ($conn->query($sql) === TRUE) {

                    echo "Actor Updated successfully";

                } else {

                    echo "Error Updating record: " . $conn->error;
                  }

                $conn->query($sql);
                $conn->close();

                header("Location: "."update.php");

			}
		}
	}
?>
