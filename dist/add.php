<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Moive Interface</title>
    <!-- Typeahead -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.svg" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Movies</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0" >
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="search.php">Search</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="add.php">Add</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="remove.php">Remove</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#info">Info</a></li>
            </ul>
        </div>
      </div>
    </nav>

    <main role="main">
        <section class="jumbotron text-center" style="background-image: url('assets/img/projector2.png');">
            <br></br>
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-baseline">
                        <h1 class="text-uppercase text-white font-weight-bold">All-In-One Movie Form</h1>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <div class="row h-100 align-items-center justify-content-center text-center">
            <form class="inline-form" method="post" action="insertionFunctions.php">
                <div class="form-group">
                    <div class="container">
                        <h2>Movie Info</h2>
                        <div class="row">
                            <div class="col">
                                <label for="MovieInput1">Movie I.D. </label>
                                <input type="number" class="form-control" name="Movie_ID" id="MovieInput1" value=
                                <?php
                                    include 'conf/connection.php';

                                    $sql = "SELECT max(Movie_ID) FROM Movie";

                                    $result = $conn->query($sql);

                                    $row = $result->fetch_assoc();
                                    echo $row['max(Movie_ID)']+1;

                                    $conn->close();

                                 ?>
                                >
                            </div>
                            <div class="col">
                                <label for="MovieInput2">Movie Title </label>
                                <input type="text" class="form-control" name="Movie_title" id="MovieInput2" placeholder="Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="MovieInput3">Runtime (min) </label>
                                <input type="number" class="form-control" name="Runtime" id="MovieInput3" placeholder="Minutes">
                            </div>
                            <div class="col">
                                <label for="MovieInput4">Rating </label>
                                <select class="form-control" name="Rating" id="MovieInput4">
                                    <option value="" disabled selected>Rating</option>
                                    <option value="G">G</option>
                                    <option value="PG">PG</option>
                                    <option value="PG-13">PG-13</option>
                                    <option value="R">R</option>
                                    <option value="NC-17">NC-17</option>
                                </select>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="MovieInput5">Release Year </label>
                                <input type="number" class="form-control" name="ReleaseYear" id="MovieInput5" placeholder="Year">
                            </div>
                            <div class="col">
                                <label for="MovieInput6">Description </label>
                                <input type="text" class="form-control" name="Description" id="MovieInput6" placeholder="Description">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr class="divider my-4" />
                <div class="container">
                    <h2>Genre Info</h2>
                    <div class="row">
                        <div class="col">
                            <label for="GenreInput1">Genre I.D. </label>
                            <input type="number" class="form-control" name="Genre_ID[]" id="GenreInput1" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Genre_ID) FROM Genre";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Genre_ID)']+1;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="GenreInput2">Genre Name</label>
                            <input type="text" class="form-control" name="Genre_name[]" id="GenreInput2" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="GenreInput3">Genre I.D. </label>
                            <input type="number" class="form-control" name="Genre_ID[]" id="GenreInput3" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Genre_ID) FROM Genre";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Genre_ID)']+2;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="GenreInput4">Genre Name</label>
                            <input type="text" class="form-control" name="Genre_name[]" id="GenreInput4" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="GenreInput5">Genre I.D. </label>
                            <input type="number" class="form-control" name="Genre_ID[]" id="GenreInput5" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Genre_ID) FROM Genre";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Genre_ID)']+3;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="GenreInput6">Genre Name</label>
                            <input type="text" class="form-control" name="Genre_name[]" id="GenreInput6" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="GenreInput7">Genre I.D. </label>
                            <input type="number" class="form-control" name="Genre_ID[]" id="GenreInput7" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Genre_ID) FROM Genre";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Genre_ID)']+4;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="GenreInput8">Genre Name</label>
                            <input type="text" class="form-control" name="Genre_name[]" id="GenreInput8" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="GenreInput9">Genre I.D. </label>
                            <input type="number" class="form-control" name="Genre_ID[]" id="GenreInput9" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Genre_ID) FROM Genre";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Genre_ID)']+5;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="GenreInput10">Genre Name</label>
                            <input type="text" class="form-control" name="Genre_name[]" id="GenreInput10" placeholder="Name">
                        </div>
                    </div>

                </div>
                <br>
                <hr class="divider my-4" />
                <div class="container">
                    <h2>Director Info</h2>
                    <div class="row">
                        <div class="col">
                            <label for="DirectorInput1">Director I.D. </label>
                            <input type="number" class="form-control" name="Director_ID[]" id="DirectorInput1" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Director_ID) FROM Director";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Director_ID)']+1;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="DirectorInput2">First Name</label>
                            <input type="text" class="form-control" name="Director_fname[]" id="DirectorInput2" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput3">Last Name</label>
                            <input type="text" class="form-control" name="Director_lname[]" id="DirectorInput3" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput4">Gender</label>
                            <select class="form-control" name="Director_gender[]" id="DirectorInput4">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="DirectorInput5">Birth Date</label>
                            <input type="date" class="form-control" name="Director_bdate[]" id="DirectorInput5" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="DirectorInput7">Director I.D. </label>
                            <input type="number" class="form-control" name="Director_ID[]" id="DirectorInput7" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Director_ID) FROM Director";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Director_ID)']+2;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="DirectorInput8">First Name</label>
                            <input type="text" class="form-control" name="Director_fname[]" id="DirectorInput8" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput9">Last Name</label>
                            <input type="text" class="form-control" name="Director_lname[]" id="DirectorInput9" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput10">Gender</label>
                            <select class="form-control" name="Director_gender[]" id="DirectorInput10">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="DirectorInput11">Birth Date</label>
                            <input type="date" class="form-control" name="Director_bdate[]" id="DirectorInput11" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="DirectorInput12">Director I.D. </label>
                            <input type="number" class="form-control" name="Director_ID[]" id="DirectorInput12" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Director_ID) FROM Director";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Director_ID)']+3;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="DirectorInput13">First Name</label>
                            <input type="text" class="form-control" name="Director_fname[]" id="DirectorInput13" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput14">Last Name</label>
                            <input type="text" class="form-control" name="Director_lname[]" id="DirectorInput14" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput15">Gender</label>
                            <select class="form-control" name="Director_gender[]" id="DirectorInput15">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="DirectorInput16">Birth Date</label>
                            <input type="date" class="form-control" name="Director_bdate[]" id="DirectorInput16" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="DirectorInput17">Director I.D. </label>
                            <input type="number" class="form-control" name="Director_ID[]" id="DirectorInput17" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Director_ID) FROM Director";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Director_ID)']+4;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="DirectorInput18">First Name</label>
                            <input type="text" class="form-control" name="Director_fname[]" id="DirectorInput18" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput19">Last Name</label>
                            <input type="text" class="form-control" name="Director_lname[]" id="DirectorInput19" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput20">Gender</label>
                            <select class="form-control" name="Director_gender[]" id="DirectorInput20">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="DirectorInput21">Birth Date</label>
                            <input type="date" class="form-control" name="Director_bdate[]" id="DirectorInput21" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="DirectorInput22">Director I.D. </label>
                            <input type="number" class="form-control" name="Director_ID[]" id="DirectorInput22" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Director_ID) FROM Director";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Director_ID)']+5;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="DirectorInput23">First Name</label>
                            <input type="text" class="form-control" name="Director_fname[]" id="DirectorInput23" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput24">Last Name</label>
                            <input type="text" class="form-control" name="Director_lname[]" id="DirectorInput24" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="DirectorInput25">Gender</label>
                            <select class="form-control" name="Director_gender[]" id="DirectorInput25">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="DirectorInput26">Birth Date</label>
                            <input type="date" class="form-control" name="Director_bdate[]" id="DirectorInput26" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                </div>
                <br>
                <hr class="divider my-4" />
                <div class="container">
                    <h2>Actor Info</h2>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput1">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput1" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+1;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput2">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput2" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput3">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput3" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput4">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput4">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput5">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput5" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput7">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput7" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+2;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput8">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput8" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput9">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput9" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput10">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput10">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput11">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput11" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput12">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput12" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+3;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput13">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput13" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput14">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput14" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput15">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput15">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput16">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput16" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput17">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput17" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+4;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput18">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput18" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput19">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput19" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput20">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput20">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput21">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput21" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput22">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput22" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+5;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput23">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput23" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput24">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput24" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput25">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput25">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput26">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput26" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput27">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput27" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+6;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput28">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput28" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput29">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput29" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput30">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput30">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput31">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput31" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput32">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput32" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+7;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput33">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput33" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput34">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput34" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput35">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput35">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput36">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput36" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput37">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput37" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+8;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput38">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput38" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput39">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput39" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput40">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput40">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput41">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput41" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput42">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput42" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+9;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput43">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput43" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput44">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput44" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput45">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput45">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput46">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput46" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ActorInput47">Actor I.D. </label>
                            <input type="number" class="form-control" name="Actor_ID[]" id="ActorInput47" value=
                            <?php
                                include 'conf/connection.php';

                                $sql = "SELECT max(Actor_ID) FROM Actor";

                                $result = $conn->query($sql);

                                $row = $result->fetch_assoc();
                                echo $row['max(Actor_ID)']+10;

                                $conn->close();

                             ?>
                            >
                        </div>
                        <div class="col">
                            <label for="ActorInput48">First Name</label>
                            <input type="text" class="form-control" name="Actor_fname[]" id="ActorInput48" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput49">Last Name</label>
                            <input type="text" class="form-control" name="Actor_lname[]" id="ActorInput49" placeholder="Last Name">
                        </div>
                        <div class="col">
                            <label for="ActorInput50">Gender</label>
                            <select class="form-control" name="Actor_gender[]" id="ActorInput50">
                                <option value="" disabled selected>M/F</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ActorInput51">Birth Date</label>
                            <input type="date" class="form-control" name="Actor_bdate[]" id="ActorInput51" placeholder="Last Name" max=<?php echo date('Y-m-d');?>>
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="insertIntoMovie" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </main>

    <footer class="bg-light py-5">
      <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
