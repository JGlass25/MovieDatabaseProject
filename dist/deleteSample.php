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



<main role="main" class="container">

    <div class="starter-template">
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        <hr>

        <h3> Delete by ID - https://www.w3schools.com/php/php_mysql_delete.asp</h3>


        <form method="post" action="deleteSample.php">

            <div class="form-group">
                <label for="exampleFormControlInput1">Paper I.D.
                    <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
                        <p name="massage"><?php echo "<font color='red'>".$_GET['msg']."</font>"; ?> </p>
                    <?php } ?>
                </label>
                <input type="text" class="form-control" name="pid" id="pid" placeholder="e.g., 1234" required>



            </div>
            <button type="submit" name="deleteFromPaper" class="btn btn-primary">Submit</button>

        </form>

        <?php
            $msg="";
            if(isset($_POST['deleteFromPaper'])) {
                $pid = $_POST['pid'];


                if (empty($pid) || $pid === "") {
                    $msg = "paper I.D. cannot be empty. Please enter I.D. to delete";
                    header('Location: deleteSample.php?msg='.$msg);

                }else {

                    include 'conf/connection.php';

                    $sql = "SELECT * from paper where pid = '$pid'";

                    $result = $conn->query($sql);


                    if ($result -> num_rows > 0) {
                        // I.D. exists
                        // now, delete

                        $sql = "DELETE FROM paper WHERE pid = '$pid'";

                        if ($conn->query($sql) === TRUE) {

                            echo "Record deleted successfully";

                        } else {

                            echo "Error deleting record: " . $conn->error;
                        }
                        $conn->query($sql);
                        $conn->close();


                    }else{
                        echo "The given paper I.D. does not exist";
                    }

                }


            }




        ?>
    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
