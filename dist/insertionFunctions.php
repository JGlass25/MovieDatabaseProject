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

    $gid = $_POST['Genre_ID'];
    $gname = $_POST['Genre_name'];

    $did = $_POST['Director_ID'];
    $dfn = $_POST['Director_fname'];
    $dln = $_POST['Director_lname'];
    if(isset($_POST['Director_gender'])){
        $dgender = $_POST['Director_gender'];
    } else {
        $dgender = null;
    }
    $dbdate = $_POST['Director_bdate'];

    $aid = $_POST['Actor_ID'];
    $afn = $_POST['Actor_fname'];
    $aln = $_POST['Actor_lname'];
    if(isset($_POST['Actor_gender'])){
        $agender = $_POST['Actor_gender'];
    } else {
        $agender = null;
    }
    $abdate = $_POST['Actor_bdate'];

    //echo $mid."; ".$title."; ".$runTime."; ".$rating."; ".$year."; ".$desc;
    $stmt = $conn->prepare("INSERT INTO Movie (Movie_id, Movie_title, Runtime, Rating, ReleaseYear, Description) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isisis", $mid, $title, $runTime, $rating, $year, $desc);

    $stmt->execute();

    $stmt->close();

    //insert Genres
    $genre_names = array_filter($gname);
    $gN = count($genre_names);

    for($i=0; $i < ($gN) ; $i++)
    {
        if($gname[$i] == ''){
            $gname[$i] = null;
        }

        $stmt = $conn->prepare("CALL checkIfGenreExists(?)");
        $stmt->bind_param("s", $gname[$i]);
        $stmt->execute();
        do {

            $id_out = NULL;
            if (!$stmt->bind_result($id_out)) {
                echo "Bind failed: (" . $stmt->errno . ") " . $stmt->error;
            }

            while ($stmt->fetch()) {
                $returngid = $id_out;
            }
        } while ($stmt->more_results() && $stmt->next_result());

        $stmt->close();

        if($returngid != '-1'){
            $gid[$i] = $returngid;

        } else {
            $stmt = $conn->prepare("INSERT INTO Genre (Genre_id, name) VALUES (?, ?)");
            $stmt->bind_param("is", $gid[$i], $gname[$i]);
            $stmt->execute();
            $stmt->close();
        }

        $stmt = $conn->prepare("Insert INTO Movie_has_Genre (Movie_Movie_id, Genre_Genre_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $mid, $gid[$i]);
        $stmt->execute();
        $stmt->close();
    }

    //insert Directors
    $director_lastnames = array_filter($dln);
    $dN = count($director_lastnames);

    for($i=0; $i < ($dN) ; $i++)
    {
        $stmt = $conn->prepare("CALL checkIfDirectorExists(?, ?, ?)");
        $stmt->bind_param("sss", $dfn[$i], $dln[$i], $dbdate[$i]);
        $stmt->execute();
        do {

            $id_out = NULL;
            if (!$stmt->bind_result($id_out)) {
                echo "Bind failed: (" . $stmt->errno . ") " . $stmt->error;
            }

            while ($stmt->fetch()) {
                $returndid = $id_out;
            }
        } while ($stmt->more_results() && $stmt->next_result());

        $stmt->close();

        if($returndid != '-1'){
            $did[$i] = $returndid;

        } else {
            $stmt = $conn->prepare("INSERT INTO Director (Director_id, first_name, last_name, gender, birthdate, deathdate)  VALUES (?, ?, ?, ?, ?, null)");
            $stmt->bind_param("issss", $did[$i], $dfn[$i], $dln[$i], $dgender[$i], $dbdate[$i]);
            $stmt->execute();
            $stmt->close();
        }

        $stmt = $conn->prepare("INSERT INTO Movie_has_Director (Movie_Movie_id, Director_Director_id)  VALUES (?, ?)");
        $stmt->bind_param("ii", $mid, $did[$i]);
        $stmt->execute();
        $stmt->close();

    }

    //insert Actors
    $actor_lastnames = array_filter($aln);
    $aN = count($actor_lastnames);

    for($i=0; $i < ($aN) ; $i++)
    {
        $stmt = $conn->prepare("CALL checkIfActorExists(?, ?, ?)");
        $stmt->bind_param("sss", $afn[$i], $aln[$i], $abdate[$i]);
        $stmt->execute();
        do {

            $id_out = NULL;
            if (!$stmt->bind_result($id_out)) {
                echo "Bind failed: (" . $stmt->errno . ") " . $stmt->error;
            }

            while ($stmt->fetch()) {
                $returnaid = $id_out;
            }
        } while ($stmt->more_results() && $stmt->next_result());

        $stmt->close();

        if($returnaid != '-1'){
            $aid[$i] = $returnaid;

        } else {
            $stmt = $conn->prepare("INSERT INTO Actor (Actor_id, first_name, last_name, gender, birthdate, deathdate)  VALUES (?, ?, ?, ?, ?, null)");
            $stmt->bind_param("issss", $aid[$i], $afn[$i], $aln[$i], $agender[$i], $abdate[$i]);
            $stmt->execute();
            $stmt->close();
        }
        $stmt = $conn->prepare("INSERT INTO Movie_has_Actor (Movie_Movie_id, Actor_Actor_id)  VALUES (?, ?)");
        $stmt->bind_param("ii", $mid, $aid[$i]);
        $stmt->execute();
        $stmt->close();
    }
    $conn->close();

    include("add.php");
    header("Location: add.php");
    echo '<script language="javascript">';
    echo 'alert("record has been inserted into db successfully")';
    echo '</script>';

}

?>
