<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Genre Search</title>
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
          <div class="container h-100">
              <div class="row h-100 align-items-center justify-content-center text-center">
                  <div class="col-lg-10 align-self-baseline">
                      <h1 class="text-uppercase text-white font-weight-bold">Advanced Search</h1>
                      <form action="searchg.php" method="post">
                          <div class="input-group">
                              <div class="shadow-none input-group-btn search-panel">
                                  <button type="button" class="btn-light btn-block btn-lg dropdown-toggle" data-toggle="dropdown">
                                  	<span id="search_concept">Genre</span> <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="search.php">Title</a></li>
                                    <li><a href="searcha.php">Actor</a></li>
                                    <li><a href="searchd.php">Director</a></li>
                                    <li>&#10003; Genre</li>
                                  </ul>
                              </div>
                              <input type="text" name="search" id="title" class="form-control form-control-lg" placeholder="Search by genre..." aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false" >

                              <span class="input-group-btn">
                                  <button type="submit"  name="go" class="btn btn-primary btn-block btn-lg">
                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                      </svg>
                                  </button>
                              </span>
                          </div>
                          <br></br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="formRating[]" id="cbg" value="G" checked>
                                <label class="form-check-label" for="cbg" style="color:lightgray">G</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="formRating[]" id="cbpg" value="PG" checked>
                                <label class="form-check-label" for="cbpg" style="color:lightgray">PG</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="formRating[]" id="cbpg13" value="PG-13" checked>
                                <label class="form-check-label" for="cbpg13" style="color:lightgray">PG-13</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="formRating[]" id="cbr" value="R" checked>
                                <label class="form-check-label" for="cbr" style="color:lightgray">R</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="formRating[]" id="cbnc17" value="NC-17" checked>
                                <label class="form-check-label" for="cbnc17" style="color:lightgray">NC-17</label>
                            </div>
                          <br></br>
                          <div class="form-row">
                              <div class="col-auto my-1">
                                <label class="mr-sm-2 sr-only" for="selectInequalityYear">Inequality</label>
                                <select class="form-control mr-sm-2" id="selectInequalityYear" name="yearInequalityInput">
                                  <option selected value ="0">All Years</option>
                                  <option value="1">Greater Than</option>
                                  <option value="2">Less Than</option>
                                  <option value="3">Equal</option>
                                </select>
                            </div>
                            <div class="col-xs-1 my-1">
                              <input type="number" placeholder="Release Year" name="yearForm" id="yearForm" class="form-control form-control">
                            </div>

                            <div class="col-auto">&emsp; &emsp; &emsp; &emsp; &emsp;</div>

                              <div class="col-auto my-1">
                                <label class="mr-sm-2 sr-only" for="selectInequalityLength">Inequality</label>
                                <select class="form-control mr-sm-2" id="selectInequalityLength" name="lengthInequalityInput">
                                  <option selected value="0">All Runtimes</option>
                                  <option value="1">Greater Than</option>
                                  <option value="2">Less Than</option>
                                  <option value="3">Equal</option>
                                </select>
                            </div>
                            <div class="col-xs-1 my-1">
                              <input type="number" placeholder="Runtime (min)" name="lengthForm" id="lengthForm" class="form-control form-control">
                            </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <center>
        <div id="titleList"></div>
        <?php
          include 'conf/connection.php';
          //collect
          if (isset($_POST['search'])) {
              $searchq = $_POST['search'];
              if (isset($_POST['formRating'])) {
                  $rating = $_POST['formRating'];

                  $ratq = "(";

                  $N = count($rating);
                  if($N < 2) {
                      $ratq = $ratq . "'" . $rating[0] . "'" . ")";
                  }
                  else{
                      for($i=0; $i < ($N-1) ; $i++)
                      {
                        $ratq = $ratq . "'" . $rating[$i] . "'" . ",";
                      }
                      $ratq = $ratq . "'" . $rating[($N-1)] . "'" . ")";
                  }
              } else {
                  $ratq = "('G','PG','PG-13','R','NC-17')";
              }

                if (isset($_POST['yearInequalityInput'])) {
                    $yearIneqVal = $_POST["yearInequalityInput"];

                    if (isset($_POST['yearForm'])) {
                        if($yearIneqVal == "0"){
                            $yearIneq = ">";
                            $yearq = 1800;
                        }
                        elseif($yearIneqVal == "1"){
                            $yearIneq = ">";
                            $yearq = $_POST['yearForm'];
                        }
                        elseif($yearIneqVal == "2"){
                            $yearIneq = "<";
                            $yearq = $_POST['yearForm'];
                        }
                        elseif($yearIneqVal == "3"){
                            $yearIneq = "=";
                            $yearq = $_POST['yearForm'];
                        }
                    }
                    else {
                        $yearIneq = ">";
                        $yearq = 1800;
                    }
                }
                else {
                    $yearIneq = ">";
                    $yearq = 1800;
                }


                if (isset($_POST['lengthInequalityInput'])) {
                    $lenIneqVal = $_POST["lengthInequalityInput"];
                      if (isset($_POST['lengthForm'])) {
                          if($lenIneqVal == "0"){
                              $lenIneq = ">";
                              $lenq = 0;
                          }
                          elseif($lenIneqVal == "1"){
                              $lenIneq = ">";
                              $lenq = $_POST['lengthForm'];
                          }
                          elseif($lenIneqVal == "2"){
                              $lenIneq = "<";
                              $lenq = $_POST['lengthForm'];
                          }
                          elseif($lenIneqVal == "3"){
                              $lenIneq = "=";
                              $lenq = $_POST['lengthForm'];
                          }
                      }
                      else {
                          $lenIneq = ">";
                          $lenq = 0;
                      }
                }
                else {
                    $lenIneq = ">";
                    $lenq = 0;
                }




              $sql = "SELECT Movie_title, Runtime, Rating, ReleaseYear, name as genre FROM Movie join Movie_has_Genre MhG on Movie.Movie_id = MhG.Movie_Movie_id join Genre G on G.Genre_id = MhG.Genre_Genre_id WHERE name LIKE '$searchq%' AND Rating in $ratq AND ReleaseYear $yearIneq $yearq AND Runtime $lenIneq $lenq";

              $result = $conn->query($sql);

              if ($result -> num_rows > 0) {
                  echo " <table class='table-dark table-striped'>
                            <tbody>
                              <tr>
                                <td><center><h5>&emsp; Title &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Runtime &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Rating &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Year &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Genre &emsp;</h5></center></td>
                              </tr>
                          ";

                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                      ?>
                <tr>
                  <td> <?php echo $row['Movie_title'] ?> </td>
                  <td> <center><?php echo $row['Runtime'] ?> </center></td>
                  <td> <center><?php echo $row['Rating'] ?> </center></td>
                  <td> <center><?php echo $row['ReleaseYear'] ?> </center></td>
                  <td> <center><?php echo $row['genre'] ?> </center></td>
                </tr>
              <?php
                  }
                  echo "</tbody></table>";
              } else {
                  echo 'No Results';
              }
              $conn->close();
          }
        ?>
    </center>

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

<script>
$(document).ready(function(){

 $('#title').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetchg.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
});
});
</script>
