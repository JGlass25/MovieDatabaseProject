<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Remove by Title</title>
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
                      <h1 class="text-uppercase text-white font-weight-bold">Remove</h1>
                      <form action="remove.php" method="post">
                          <div class="input-group">
                              <div class="shadow-none input-group-btn search-panel">
                                  <button type="button" class="btn-light btn-block btn-lg dropdown-toggle" data-toggle="dropdown">
                                  	<span id="search_concept">Title</span> <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>&#10003; Title</li>
                                    <li><a href="removeID.php">ID</a></li>
                                  </ul>
                              </div>
                              <input type="text" name="search" id="title" class="form-control form-control-lg" placeholder="Enter title..." aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false" >

                              <span class="input-group-btn">
                                  <button type="submit"  name="go" class="btn btn-primary btn-block btn-lg">
                                      DELETE
                                  </button>
                              </span>
                          </div>
                      </form>
                      <br>
                      <br>
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

              $sql = "SELECT Movie_ID, Movie_title, Runtime, Rating, ReleaseYear from Movie WHERE Movie_title LIKE '$searchq%'";

              $result = $conn->query($sql);

              if ($result -> num_rows > 0) {
                  echo " <table class='table-dark table-striped'>
                            <tbody>
                              <tr>
                                <td><center><h5>&emsp; ID &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Title &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Runtime &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Rating &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Year &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Confirm Delete &emsp;</h5></center></td>
                              </tr>
                          ";

                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                          <td> <center><?php echo $row['Movie_ID'] ?> </center></td>
                          <td> <?php echo $row['Movie_title'] ?> </td>
                          <td> <center><?php echo $row['Runtime'] ?> </center></td>
                          <td> <center><?php echo $row['Rating'] ?> </center></td>
                          <td> <center><?php echo $row['ReleaseYear'] ?> </center></td>

                              <form method="post" action="deleteRecord.php?action=delete&id=<?php echo $row['Movie_ID'] ?>">
                                  <td> <center><button type="submit" name="deleteRecordHomePage" class="btn btn-danger">Confirm Delete</button> </center></td>
                              </form>

                       </tr>

                  <?php
                  }
                  echo "</tbody></table>";

              }else {
                  echo "<p class='lead'> No results available </p>";
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
    url:"fetch.php",
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
