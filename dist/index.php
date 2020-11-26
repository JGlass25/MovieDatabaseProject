<!DOCTYPE html>
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
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Movies</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="search.php">Search</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="add.php">Add</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="remove.php">Remove</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#info">Info</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white font-weight-bold">Welcome to the Movie Database Interface</h1>
            <hr class="divider my-4" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-light mb-5">From here you can scroll down or use the navigation bar above to search your movie catalog or add and delete movies</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="search.php">Search</a>
          </div>
        </div>
      </div>
    </header>
    <!-- Search-->
    <section class="page-section bg-primary" id="search">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">Search</h2>
            <hr class="divider light my-4" />
            <form action="search.php" method="post">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" name="search" id="title" class="form-control form-control-lg" placeholder="Search by title..." aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false" >
                </div>
                  <div class="col-12 col-md-3">
                <button type="submit" class="btn-secondary btn-block btn-lg btn-primary">Go!</button>
                </div>
              </div>
            </form>
            <p></p>
            <div>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="search.php">Advanced Search</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Add-->
    <section class="page-section" id="add">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-center mt-0">Got a New Movie?</h2>
            <hr class="divider my-4" />
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter the title...">
                </div>
                    <div class="col-12 col-md-3">
                <button type="submit" class="btn-secondary btn-block btn-lg btn-primary">Add</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Remove -->
    <section class="page-section bg-dark text-white" id="remove">
      <div class="container text-center">
        <h2 class="mb-4">Delete Movie</h2>
        <hr class="divider light my-4" />
        <a class="btn btn-light btn-xl" href="remove.php">Go to the Delete Form</a>
      </div>
    </section>
    <!-- Info-->
    <section class="page-section" id="info">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0">Information</h2>
            <hr class="divider my-4" />
            <p class="text-muted mb-5">Created by John Glasser and Yizhe Ye</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
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
