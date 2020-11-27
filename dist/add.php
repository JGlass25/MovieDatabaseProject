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
                        <h1 class="text-uppercase text-white font-weight-bold">New Movie Form</h1>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <div class="row h-100 align-items-center justify-content-center text-center">
            <form method="post" action="insertionFunctions.php">
                <div class="form-group">
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

                    <label for="MovieInput2">Movie Title </label>
                    <input type="text" class="form-control" name="Movie_title" id="MovieInput2" placeholder="Title">

                    <label for="MovieInput3">Runtime (min) </label>
                    <input type="number" class="form-control" name="Runtime" id="MovieInput3" placeholder="Minutes">

                    <label for="MovieInput4">Rating </label>
                    <select class="form-control" name="Rating" id="MovieInput4">
                        <option value="" disabled selected>Rating</option>
                        <option value="G">G</option>
                        <option value="PG">PG</option>
                        <option value="PG-13">PG-13</option>
                        <option value="R">R</option>
                        <option value="NC-17">NC-17</option>
                    </select>

                    <label for="MovieInput5">Release Year </label>
                    <input type="number" class="form-control" name="ReleaseYear" id="MovieInput5" placeholder="Year">

                    <label for="MovieInput6">Description </label>
                    <input type="text" class="form-control" name="Description" id="MovieInput6" placeholder="Description">
                </div>
                <button type="submit" name="insertIntoMovie" class="btn btn-primary">Submit</button>
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
