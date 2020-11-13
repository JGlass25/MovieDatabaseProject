<?php

	


	if (isset($_POST["deleteRecordHomePage"])) {

		if ( isset($_GET["action"]) ) {

			if ( $_GET["action"] === "delete" ) {

				// establish a connection and then delete

				$id = $_GET['id'];

				include 'conf/connection.php'; // establish connection

				 $sql = "DELETE FROM paper WHERE pid = $id";

                if ($conn->query($sql) === TRUE) {

                    // echo "Record deleted successfully";

                } else {

                    echo "Error deleting record: " . $conn->error;
                  }

                $conn->query($sql);
                $conn->close();

                header("Location: "."index.php");

			}
		}
	}






?>