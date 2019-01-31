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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="../CSS/styleBlog.css" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/master.css"/>

    <title>STEAM Blog</title>
  </head>
  <body>
    <!-- NAVIGATION_BAR -->
        <?php
include_once ('header.php')
?>

    <div id="pageWrapper">
      <div class="row" id="contentWrapper">
        <div id="mainContent">
          <!-- SearchSTART -->
          <div class="container">
    <div class="row searchFilter" >
       <div class="col-sm-12" >
        <div class="input-group" >
         <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" >
         <div class="input-group-btn" >
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
          <div class="dropdown-menu dropdown-menu-right" >
             <ul class="category_filters" >
              <li >
               <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio" ><label for="all" >All</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Design" value="Design" ><label class="category-label" for="Design" >Design</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Marketing" value="Marketing" ><label class="category-label" for="Marketing" >Marketing</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Programming" value="Programming" ><label class="category-label" for="Programming" >Programming</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Sales" value="Sales" ><label class="category-label" for="Sales" >Sales</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Support" value="Support" ><label class="category-label" for="Support" >Support</label>
              </li>
             </ul>
          </div>
          <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
         </div>
        </div>
       </div>
    </div>
  </div>





          <!-- SearchEND -->
          <div class="featuredSection">
            <div class="post">
              <div class="postContent">
                <a href="post.php"><img class="post-image" src="../res/img/Blog/featured1.jpg" alt=""></a>
                <div class="postInfo">
                  <h2 class="postTitle"><a href="#">Lego helps improve IQ</a></h2>
                  <div class="postMeta">
                    <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                    <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                  </div>
                </div>
              </div>
            </div>
          </div><br>
          <div class="mainSection">
            <div class="blogPostContrainer">
              <div class="gridPost">
                <div class="blogPost">
                  <div class="postImage">
                    <a href="post.php"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, deserunt mollit anim id est laborum deserunt mollit anim id est laborum...</p>
                    <div onclick="window.location.href='../pages/post.php'" class="btn btn-success uniBtn">Read More</div>
                  </div>
                </div>

                <div class="blogPost">
                  <div class="postImage">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, deserunt mollit anim id est laborum deserunt mollit anim id est laborum...</p>
                    <div onclick="window.location.href='../pages/post.php'" class="btn btn-success uniBtn">Read More</div>
                  </div>
                </div>

                <div class="blogPost">
                  <div class="postImage">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, deserunt mollit anim id est laborum deserunt mollit anim id est laborum...</p>
                    <div onclick="window.location.href='../pages/post.php'" class="btn btn-success uniBtn">Read More</div>
                  </div>
                </div>

                <div class="blogPost">
                  <div class="postImage">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, deserunt mollit anim id est laborum deserunt mollit anim id est laborum...</p>
                    <div onclick="window.location.href='../pages/post.php'" class="btn btn-success uniBtn">Read More</div>
                  </div>
                </div>

                <div class="blogPost">
                  <div class="postImage">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, deserunt mollit anim id est laborum deserunt mollit anim id est laborum...</p>
                    <div onclick="window.location.href='../pages/post.php'" class="btn btn-success uniBtn">Read More</div>
                  </div>
                </div>



              </div>
            </div>
          </div>

          <div class="blog-pager container" id="blog-pager">
            <span class="page-num page-active">1</span>
            <a class="page-num" href="#" onclick="getPage(2);return false">2</a>
            <a class="page-num" href="#" onclick="getPage(3);return false">3</a>
            <span class="page-num page-dots">...</span>
            <a class="page-num" href="#" onclick="getPage(5);return false">5</a>
            <a class="page-num page-next" href="#" onclick="getPage(2);return false"><i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="suscribeBox">

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
                  <!-- <div onclick="window.location.href='../pages/readMore.php'" class="btn btn-success uniBtn">Read More</div> -->
                  <input class="emailButton btn btn-success uniBtn" type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
          <div class="sideBlock highlight">
            <div class="highTitle">
              <h3>You might like</h3>
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

      <!-- <div class="endAction subscribeBox">
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
  <script type="text/javascript">
  $(document).ready(function(e){
$('.search-panel .dropdown-menu').find('a').click(function(e) {
e.preventDefault();
var param = $(this).attr("href").replace("#","");
var concept = $(this).text();
$('.search-panel span#search_concept').text(concept);
$('.input-group #search_param').val(param);
});
});
  </script>

</html>
