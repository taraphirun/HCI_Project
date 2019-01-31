
<?php
include_once ('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../CSS/master.css">
<!------ Include the above in your HEAD tag ---------->

<div class="row">
  <!-- Search -->
  <div class="col-12 col-md-3 filterbar"><h2><i class="fas fa-filter"></i>Filter</h2>

    <hr>
<h5>Search:</h5>
<div class="row">
  <form class="form-inline searchtest">
    <input class="searchtest" type="search" placeholder="Type in location, zipcode, or instructor.." aria-label="Search">
  </form>
  </div>
<br>
<!-- Date Picker -->
<div class="row">
  <div class="col-md-6">
<h5 for="start">From </h5>
</div>
<h5>To</h5>
</div>

<div class="row">
<?php
 include('Datepicker.php')
?>
</div>
<br>
<h5>Time:</h5>
<div class="row">
            <!-- Range slider: -->
<?php
include('TimeSlider.php')

?>

        </div>

        <br>
<!-- Age Range -->

<div class="row">
  <div class="col-md-6">
  <?php
  include('AgeRange.php')
  ?>
  </div>
</div>
<br>
<!-- Catagory -->
<?php
include('treeview.php')

?>
</div>




<!-- Cardshow -->
<div class="col-12 col-md-9 classShow">
  <h1 class="uniH2">CLASSES</h1>


<!-- details card section starts from here -->
<?php

include('classshow.php')
?>

<br>
<div class="col-md-12">
<button type="button" class="btn btn-outline-secondary btn-lg btn-block"><i class="fas fa-plus"></i> Show More</button>
</div>
</div>
</div>

<!-- details card section starts from here -->
</body>
<style>
h1 {
  color: #5BC0AF;
}

.filterbar {
  padding-left: 35px;
  padding-top: 45px;
  background-color: #F4F4F5;

}

.classShow{
  background-color: #FEFFFF;
}

.searchtest {
  width: 300px;
}

/**/

/* card details start  */
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
section{
    padding: 100px 0;
}
.details-card {
  background: #ecf0f1;
}

.card-content {
  background: #ffffff;
  border: 4px;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
  position: relative;
  overflow: hidden;
  border-radius: 0;
  z-index: 1;
}

.card-img img {
  width: 100%;
  height: auto;
  display: block;
}

.card-img span {
  position: absolute;
    top: 15%;
    left: 12%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
  padding: 1.25rem;
}

.card-desc h3 {
  color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
  color: #747373;
    font-size: 14px;
  font-weight: 400;
  font-size: 1em;
  line-height: 1.5;
  margin: 0px;
  margin-bottom: 20px;
  padding: 0;
  font-family: 'Raleway', sans-serif;
}
.btn-card{
  background-color: #1ABC9C;
  color: #fff;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}
/* End card section */
</style>

<script>
   $("#ex16b").slider({ min: 0, max: 10, value: [0, 10], focus: true });
         var sliderB = new Slider("#ex16b", { min: 0, max: 10, value: [0, 10], focus: true });
</script>



<?php
  include ('Footer.php');
  ?>
</html>
