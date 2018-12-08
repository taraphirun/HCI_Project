<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../CSS/BlogTest.css">
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<h1>BLOG</h1>
	<div id="wrapper-filter">
	<ul class="filterlinks" id="filter-bar">
                <span class="pill"></span>
                <li class="filter-option option-1 active" data-target="option-1"><a href="#">All</a></li>
                <li class="filter-option option-2" data-target="option-2"><a href="#">Age</a></li>
                <li class="filter-option option-3" data-target="option-3"><a href="#">Time</a></li>
              <li class="filter-option option-4" data-target="option-4"><a href="#">Skill</a></li>
        
            </ul>
        </div>

<br/>

<div class="filter-sections">
    <div class="age" style="width: 18rem;">
  <img class="card-img-top" src="../img/kids.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
  </div>


  <div class="time" style="width: 18rem;">
  <img class="card-img-top" src="../img/kids.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
  </div>
  

  <div class="skill" style="width: 18rem;">
  <img class="card-img-top" src="../img/coach.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
  </div>

  <div class="skill" style="width: 18rem;">
  <img class="card-img-top" src="../img/kids.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
  </div>
 
</div>
</div>
	<?php
include 'footer.php';
?>
	<script src="../js/BlogTest.js"></script>
</body>
</html>


