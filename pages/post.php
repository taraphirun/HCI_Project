<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="../CSS/styleBlog.css" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/master.css">
    <title>STEAM Blog</title>
  </head>
  <body>


    <div id="pageWrapper">
      <div class="row" id="contentWrapper">
        <div id="mainContent">
          <div class="postWrapper">
            <div class="postTitle">
              <h2>Lego helps increase IQ</h2>
              <div class="postMeta">
                <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
              </div>
            </div>
            <div class="postImageContainer">
              <img class="post-image"src="../../res/img/Blog/featured1.jpg" alt="">
            </div>
            <div class="postContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam necessitatibus quis, nesciunt odit! Recusandae quam accusantium iure, quaerat tempore, cum! Nisi maxime modi error ullam fugit, nam architecto, adipisci tempore amet! Iste quas blanditiis ullam iusto saepe incidunt enim veritatis vel, velit quisquam, illo! Quaerat quisquam enim delectus, dolorum! Aliquid.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam necessitatibus quis, nesciunt odit! Recusandae quam accusantium iure, quaerat tempore, cum! Nisi maxime modi error ullam fugit, nam architecto, adipisci tempore amet! Iste quas blanditiis ullam iusto saepe incidunt enim veritatis vel, velit quisquam, illo! Quaerat quisquam enim delectus, dolorum! Aliquid.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam necessitatibus quis, nesciunt odit! Recusandae quam accusantium iure, quaerat tempore, cum! Nisi maxime modi error ullam fugit, nam architecto, adipisci tempore amet! Iste quas blanditiis ullam iusto saepe incidunt enim veritatis vel, velit quisquam, illo! Quaerat quisquam enim delectus, dolorum! Aliquid.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam necessitatibus quis, nesciunt odit! Recusandae quam accusantium iure, quaerat tempore, cum! Nisi maxime modi error ullam fugit, nam architecto, adipisci tempore amet! Iste quas blanditiis ullam iusto saepe incidunt enim veritatis vel, velit quisquam, illo! Quaerat quisquam enim delectus, dolorum! Aliquid.</p>
            </div>
            <div class="postNavigator"></div>
            <div class="recommendation"></div>
            <div class="comment"></div>
          </div>
        </div>
        <div id="sideContent">
          <div class="sideBlock subscribeBox">
            <div class="subContent">
              <h3 class="subTitle">Get updated by Email</h3>
              <p class="subPara">Get the latest news and offers delivered straight to your inbox!</p>
              <div class="subForm">
                <form action="#" method="get" class="subForm">
                  <input class="emailBox" type="email" name="userEmail" placeholder="Email Address">
                  <input class="emailButton uniBtn" type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
          <div class="postAds">
            <div class="adsImgCon">
              <img class="adsImg" src="../../res/img/Blog/ads/lego.jpg" alt="">
            </div>
            <div class="adsMeta">
              <span class="adsTitle">LEGO Minecraft The Nether Portal 21143 Building Kit (470 Piece)</span>
              <span class="adsBrand">By Lego</span> <br>
              <span class="adsPrice"><i class="fas fa-dollar-sign"></i> $9.99 </span>
            </div>
            <div class="adsBtn">
              <!-- <div onclick="href='https://www.amazon.com/LEGO-Minecraft-Nether-Portal-Building/dp/B075RFBKNX'" class="btn btn-success uniBtn">Buy Now on Amazon</div> -->
              <a target="_blank" class="btn btn-success uniBtn" href="https://www.amazon.com/LEGO-Minecraft-Nether-Portal-Building/dp/B075RFBKNX"> Buy Now on Amazon</a>
            </div>
          </div>

          


          <div class="sideBlock highlight mt-5">
            <div class="highTitle">
              <h3>Related Posts</h3>
            </div>
            <div class="highPostBox">
              <div class="highPost">
                <div class="highThum">
                  <img class="imgThum" src="../res/img/Blog/highPost1.jpeg" alt="">
                </div>
                <div class="highContent">
                  <h4>Study shown that some music enhants learning capacity</h4>
                  <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                  </div>
                </div>
              </div>

              <div class="highPost">
                <div class="highThum">
                  <img class="imgThum" src="../res/img/Blog/highPost1.jpeg" alt="">
                </div>
                <div class="highContent">
                  <h4>Study shown that some music enhants learning capacity</h4>
                  <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                </div>
              </div>

              <div class="highPost">
                <div class="highThum">
                  <img class="imgThum" src="../res/img/Blog/highPost1.jpeg" alt="">
                </div>
                <div class="highContent">
                  <h4>Study shown that some music enhants learning capacity</h4>
                  <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                </div>
              </div>
            </div>

          </div>
          <div class="sideBlock category">
            <div class="highTitle">
              <h3>Categories</h3>
            </div>
            <div class="categoryList">
                <a  href="#" class="categoryLink"><div class="listObj">Mathematic</div></a>
                <a  href="#" class="categoryLink"><div class="listObj">Creative Writing</div></a>
                <a href="#"  class="categoryLink"><div class="listObj">General Education</div></a>
                <a href="#"  class="categoryLink"><div class="listObj">Tips and Trick</div></a>
                <a href="#"  class="categoryLink"><div class="listObj">Others</div></a>
            </div>
          </div>
          <div class="sideBlock tag"></div>
        </div>
      </div>

      <!-- <div class="sideBlock subscribeBox">
        <div class="subContent">
          <h3 class="subTitle">Get updated by Email</h3>
          <p class="subPara">Get the latest news and offers delivered straight to your inbox!</p>
          <div class="subForm">
            <form action="#" method="get" class="subForm">
              <input class="emailBox" type="email" name="userEmail" placeholder="Email Address">
              <input class="emailButton" type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div> -->

    </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script> -->
  <?php
  include('Footer.php')
  ?>
  </body>

</html>
