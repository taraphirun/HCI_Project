<?php
include ('header.php')
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../CSS/floatingButton.css">
  
  <link rel="stylesheet" href="../CSS/filterContent.css"> 
  <script src="../js/modernizr.js"></script> 
    
  <title>Content</title>
</head>
<body>
  <h1>FIND A CLASS</h1>
  <?php
  include_once ('search.php')

  ?>

  <main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
      <div class="cd-tab-filter">
        <ul class="cd-filters">
          <li class="placeholder"> 
            <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
          </li> 
          <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
          <li class="filter" data-filter=".nature"><a href="#0" data-type="nature">Upcoming Season</a></li>
          <!-- <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">PAID TRIAL</a></li> -->
        </ul> <!-- cd-filters -->
      </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery">
      <ul>
        <li class="mix nature check1 radio2 option3">
          <img class="card-img-top" src="../img/img-1.jpg" alt="Image 1">
          <div class="card-body">
    <h5 class="card-title">Nature Class</h5>
    <p class="card-text">Detail: Bring kids to the nature <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak <br>
      Coach: HUIHUIHUI
    </p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
</div>
  </div>
        </li>
        <li class="mix color-2 check2 radio2 option2">
          <img class="card-img-top" src="../img/img-2.jpg" alt="Image 2">
          <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Detail: Bring kids to the nature  <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak
      Coach: HUIHUIHUI
    </p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
</div>
        </li>
        <li class="mix nature check3 radio3 option1">
          <img class="card-img-top" src="../img/img-3.jpg" alt="Image 3">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Detail: Bring kids to the nature  <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak
      Coach: HUIHUIHUI
    </p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
    
</div>
</li>
        <li class="mix nature check3 radio2 option4">
          <img class="card-img-top" src="../img/img-4.jpg" alt="Image 4">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Detail: Bring kids to the nature  <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak
      Coach: HUIHUIHUI
    </p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
    
</div></li>
        <li class="mix nature check1 radio3 option2">
          <img class="card-img-top" src="../img/img-5.jpg" alt="Image 5">
<div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Detail: Bring kids to the nature  <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak
      Coach: HUIHUIHUI
    </p>
   <a href="readMore.php" class="btn btn-primary">READ MORE</a>
    
</div>
        </li>
        <li class="mix color-2 check2 radio3 option3">
          <img class="card-img-top" src="../img/img-6.jpg" alt="Image 6">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Detail: Bring kids to the nature  <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak
      Coach: HUIHUIHUI
    </p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
    
</div></li>
        <li class="mix color-2 check2 radio2 option1">
          <img class="card-img-top" src="../img/img-7.jpg" alt="Image 7">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
   <p class="card-text">Detail: Bring kids to the nature  <br>
      Date: 2018-12-12 <br>
      Time: 10:30 - 12:30 <br>
      Location:Bangkok,HuaMak
      Coach: HUIHUIHUI
    </p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
</div></li>
        <li class="mix nature check1 radio3 option4">
          <img class="card-img-top" src="../img/img-8.jpg" alt="Image 8">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <li class="mix color-2 check1 radio2 option3">
          <img class="card-img-top" src="../img/img-9.jpg" alt="Image 9">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
  
</div></li>
        <li class="mix nature check3 radio2 option4">
          <img class="card-img-top" src="../img/img-10.jpg" alt="Image 10">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="readMore.php" class="btn btn-primary">READ MORE</a>
  
</div></li>
        <button>MORE CLASSES</button>
        <li class="gap"></li>
        <li class="gap"></li>
        <li class="gap"></li>
      </ul>


      <div class="cd-fail-message">No results found</div>
    </section> <!-- cd-gallery -->

<!-- ******************filterBar *****-->

    <?php 
    include('ClassFilterBar.php')

    ?>
<!--*****************filter bar ********* -->
    

    <div class="floatButton">
  <button class="try-a-class"> <a href="PaidTrial.php">Try A Class</a></button>
</div>

  </main> <!-- cd-main-content -->
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/jquery.mixitup.min.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
<?php
  include ('Footer.php');
  ?>
</body>

</html>