<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Actor Search</title>
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
                      <h1 class="text-uppercase text-white font-weight-bold">Update Form</h1>
                      <form action="update.php" method="post">
                          <div class="input-group">
                              <div class="shadow-none input-group-btn search-panel">
                                  <button type="button" class="btn-light btn-block btn-lg dropdown-toggle" data-toggle="dropdown">
                                  	<span id="search_concept">Actor</span> <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>&#10003; Actor</li>
                                    <li><a href="updated.php">Director</a></li>
                                  </ul>
                              </div>
                              <input type="text" name="search" id="name" class="form-control form-control-lg" placeholder="Enter Name..." aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false" >

                              <span class="input-group-btn">
                                  <button type="submit"  name="go" class="btn btn-primary btn-block btn-lg">
                                      UPDATE
                                  </button>
                              </span>
                          </div>
                          <br></br>
                          <div class="form-row">
                              <div class="col-auto">&emsp; &emsp; &emsp; &emsp; &emsp;&emsp;</div>
                              <div class="col-auto my-1">
                                <h3 class="text-white">Death Date</h3>
                            </div>
                            <div class="col-xs-1 my-1">
                              <input type="date" class="form-control" name="deathdate" id="deathdate" placeholder="Date" max=<?php echo date('Y-m-d');?>>
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

              $ddate = $_POST['deathdate'];

              $sql = "SELECT Actor_id, CONCAT(first_name, ' ', last_name) as actor, gender, DATE_FORMAT(birthdate, '%b %e, %Y') as birthdate,
                        CASE
                            WHEN deathdate IS null THEN deathdate
                            ELSE DATE_FORMAT(deathdate, '%b %e, %Y')
                        END AS deathdate from Actor WHERE (last_name LIKE '$searchq%' OR first_name LIKE '$searchq%' OR CONCAT(first_name, ' ', last_name) LIKE '$searchq%')";

              $result = $conn->query($sql);

              if ($result -> num_rows > 0) {
                  echo " <table class='table-dark table-striped'>
                            <tbody>
                              <tr>
                                <td><center><h5>&emsp; ID &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Name &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Gender &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Birth Day &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Death Day &emsp;</h5></center></td>
                                <td><center><h5>&emsp; Update &emsp;</h5></center></td>
                              </tr>
                          ";

                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                          <td> <center><?php echo $row['Actor_id'] ?> </center></td>
                          <td> <?php echo $row['actor'] ?> </td>
                          <td> <center><?php echo $row['gender'] ?> </center></td>
                          <td> <center><?php echo $row['birthdate'] ?> </center></td>
                          <td> <center><?php echo $row['deathdate'] ?> </center></td>

                              <form method="post" action="updateRecord.php?action=update&id=<?php echo $row['Actor_id']?>&date=<?php echo $ddate ?>">
                                  <td> <center><button type="submit" name="updateRecord" class="btn btn-warning">Update</button> </center></td>
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

 $('#name').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetchn.php",
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
