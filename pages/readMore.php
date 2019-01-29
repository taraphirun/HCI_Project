<?php 

include ('header.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>3 - 4 Years Kids Summer Season</h1>
  <div class="row">
    <div class="col-md-2">
      </div>
      <div class="col-md-6">
     <h2>About This Class</h2> 
     <br>
     <div class="row">
      <div class="card2" style="width: 18rem;">
  <img src="https://biznology.com/wp-content/uploads/2017/06/Teacher-reading-to-childr-014_0.jpg" class="card-img-top" alt="..." style="height: 250px">
  </div>
    <div class="col-md-5">
      <Strong>Overview:</Strong> <br>
      <p><b>Theme:</b> StoryTelling <br>
     <b>What Can Kids Learn: </b>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro a, tempora modi inventore praesentium mollitia distinctio libero, officiis animi! Blanditiis dolores reiciendis debitis quo accusamus. Error sapiente, quidem aliquid nesciunt.</p>
      </div> 
      </div>
    </div>
    <div class="col-md-3">
      <div class="card1">
        <h5>January 1 - March 1</h5>
        Wendnesday <br>
        8:30am - 10:30 am 
       <p style='color:#FA502C'> View Session Date</p>
        <hr>
        <i class="fas fa-map-marker-alt" style='color:#FA502C'> HuaMark Park</i>
    
        <hr>
        <i class="fas fa-user-alt">Coach: Tim </i>
        <hr>
        <p><strong>$199 per student </strong> for 6 sessions</p>
        <div class="row">
          <div class="col-md-2">
        <div include="form-input-select()">
  <select required>
    <!--
      This is how we can do "placeholder" options.
      note: "required" attribute is on the select
    -->
    <option value=""
            hidden
    ></option>

    <!-- normal options -->
    <option value="1" selected="selected">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  </div>
  </div>

  <div><button style="background-color: #FA502C; color:white; width:200px">Enroll</button></div>
</div>




      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h2>Related Class</h2>
      <div class='classShow'>
  <div class="row">
  <div class="col-md-4">
    <!-- 1 -->
<div class="card" style="width: 18rem;">
  <img src="https://static1.squarespace.com/static/57bdc24e03596ed5dc8fe09a/58518325893fc0cf494b30bb/5a01e4a908522931a61580fc/1510073535626/TGGroup.jpg" class="card-img-top" alt="..." style="height: 200px">
  <div class="card-body">
    <h5 class="card-title">Camping</h5>
    <p class="card-text">
Date: 2018-04-01 <br>
Time: 8:30 - 10:30 <br>
Coach: Patty</p>
    <a href="readMore.php" class="btn btn-primary">Read More</a>
  </div>
  </div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src="https://www.denverpost.com/wp-content/uploads/2016/04/20150630__20150702_K4_ZKK02ENORp1.jpg?w=526" class="card-img-top" alt="..." style="height: 200px">
  <div class="card-body">
    <h5 class="card-title">Nature Class</h5>
    <p class="card-text">
Date: 2018-04-02 <br>
Time: 8:30 - 10:30 <br>
Coach: Sam</p>
    <a href="readMore.php" class="btn btn-primary">Read More</a>
  </div>
  </div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src="https://kiddingaroundyoga.com/wp-content/uploads/2015/11/15455475349_bf316bf8ea_z.jpg" class="card-img-top" alt="..." style="height: 200px">
  <div class="card-body">
    <h5 class="card-title">Yoga</h5>
    <p class="card-text">
Date: 2018-02-02 <br>
Time: 8:30 - 10:30 <br>
Coach: Hui</p>
    <a href="readMore.php" class="btn btn-primary">Read More</a>
  </div>
  </div>

</div>
</div>

</div>
    </div>
  </div>
</body>
</html>

<style>

h2{
font-family: 'Gloria Hallelujah';

}

.card2{
  padding-left: 15px;
}
  .card1 {

    padding:10px;
    background-color:  #F4F4F5;
    border-radius: 20px
  }

  .row {
    padding-bottom: 10px
  }
</style>


<?php
 
 include('footer.php')

 ?>