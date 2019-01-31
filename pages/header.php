<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="../CSS/home.css">

    <title>STEM</title>
  </head>
  <body>
<!-- NAVIGATION_BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-0 my-sm-0 sticky-top stroke" >
      <a href="index.php" class="navbar-brand "><h2><i class="fab fa-modx" style='color:#5bc0af'>STEM</i></h2></a>
      <a class="navbar-brand ml-4" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggle">
        <ul id="navTitle" class="navbar-nav  mx-auto pull-center" align="center">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FindClassTest.php">Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="be_a_coach.php">Be our Coach</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">STEM Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About_us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact_us.php">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav pull-center">
         <button onclick="window.location.href='../pages/login.php'" class="btn btn-success my-2 my-sm-1 ml-2">Login</button>
         <button  onclick="window.location.href='../pages/login.php'" class="btn btn-danger my-2 my-sm-1 ml-2">Sign Up</button>
        </ul>
      </div>
    </nav>


    </body>
    <script type="text/javascript">
    jQuery(document).ready(function($){
    // Get current path and find target link
    var path = window.location.pathname.split("/").pop();
    console.log(path);

    // Account for home page with empty path
    if ( path == '' ) {
      path = 'index.php';
    }


    var target = $('#navTitle a[href="'+path+'"]');
    // Add active class to target link
    target.addClass('active');
  });
  </script>
</html>

<style type="text/css">
.navbar{
  background-color: #F4F4F5;
}
h1{
    margin: 20px auto;
    text-align: center;
    color: #5BC0AF;
  }
</style>
