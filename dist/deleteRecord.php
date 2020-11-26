<?php




	if (isset($_POST["deleteRecordHomePage"])) {

		if ( isset($_GET["action"]) ) {

			if ( $_GET["action"] === "delete" ) {

				// establish a connection and then delete

				$id = $_GET['id'];

				include 'conf/connection.php'; // establish connection

				$sql = "DELETE FROM Movie WHERE Movie_ID = $id";

                if ($conn->query($sql) === TRUE) {

                    echo "Movie deleted successfully";

                } else {

                    echo "Error deleting record: " . $conn->error;
                  }

                $conn->query($sql);
                $conn->close();

                header("Location: "."remove.php");

			}
		}
	}






?>
