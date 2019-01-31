<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/dnSlide.css">
    <link href="../CSS/style2.css" rel="stylesheet" />
    <link href="../CSS/styleBlog.css" rel="stylesheet" />
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <meta charset="utf-8">
    <title>STEAM v2</title>
  </head>
  <body>
    <div class="mainContainer">
      <div id="coverPage" >
        <div class="greeting">
          <div class="overlayHome"></div>
          <h1>Find the <strong>BEST Class</strong> for your children</h1>
          <button onclick="window.location.href='../pages/FindClassTest.php'" class="btn btn-success uniBtn findClassBtn">Find Class Now</button>
        </div>
      </div>
      <div class="recommendation">
        <div class="recTitle">
          <h2>Most <strong>Popular</strong> Classes</h2>
        </div>
        <div class="recContent">
          <div class="recom">
            <div class="recomWrapper">
              <div class="recImgCon">
                <img class="recImg" src="../res/img/class/lego.jpeg" alt="">
              </div>
              <div class="recMeta">
                <h3>LEGO Robotic</h3>
                <div class="metaInfo age">3 - 5 years old</div>
                <div class="metaInfo time">9:30 - 10:00</div>
                <div class="metaInfo price">$ 120.00</div>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <div class="learnMore">
                  <div onclick="window.location.href='../pages/readMore.php'" class="btn btn-success uniBtn">Learn More</div>
                </div>
              </div>
            </div>
          </div>
          <div class="recom">
            <div class="recomWrapper">
              <div class="recImgCon">
                <img class="recImg" src="../res/img/class/soccer.jpg" alt="">
              </div>
              <div class="recMeta">
                <h3>Kid Soccer</h3>
                <div class="metaInfo age">4 - 6 years old</div>
                <div class="metaInfo time">16:30 - 17:00</div>
                <!-- <div class="metaInfo place">LA Hight School</div> -->
                <div class="metaInfo price">$ 120.00</div>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <div class="learnMore">
                  <div onclick="window.location.href='../pages/readMore.php'" class="btn btn-success uniBtn">Learn More</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mainContent">
        <!-- SECTION2 -->
        <div class="sect2Container">
          <div class="sect2Wrapper">
            <div class="row">
              <div class="col-md-6 steam_vidCon">
                <video class="steam_vid" src="../res/vid/STEAM_ads.mp4" poster="../res/img/explain.png"  controls>
                </video>
              </div>
              <div class="col-md-6">
                <div class="center">
                  <h2 class="uniH2">How We Do What We Do</h2>
                  <h3 class="uniH3"> To create the best learning environment possible, we take carefully design and personalized each class to best fit the children.</h3>
                  <div class="stepsCon">
                    <div class="stepsWrapper">
                      <div class="step">
                        <div class="stepInfo">
                          <h4>1</h4>
                          <p>Research</p>
                        </div>
                      </div>
                      <div class="step">
                        <div class="stepInfo">
                          <h4>2</h4>
                          <p>Design</p>
                        </div>
                      </div>
                      <div class="step">
                        <div class="stepInfo">
                          <h4>3</h4>
                          <p>Implement</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="buttonCon">
                    <button onclick="window.location.href='../pages/FindClassTest.php'"class="btn btn-success uniBtn button">Find Class</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SECTION3: Video Testomony of Current Coach -->
        <!-- <div class="coachContainer">
          <div class="dnSlide-main dn-response done" style="height: 186px;">
            <ul class="dnSlide-list">
              <li class="dnSlide-item" style="width: 427px; height: 166px; z-index: 2; opacity: 1; left: 158.333px; top: 9.66667px;">
                <a href="javascript:void(0)">
                  <img class="slide-img" src="res/img/coaches/coach3.jpg" width="100%">
                </a>
              </li>
              <li class="dnSlide-item" style="width: 475px; height: 186px; z-index: 3; opacity: 1; left: 237.5px; top: 0px;">
                <a href="javascript:void(0)">
                  <img class="slide-img" src="res/img/coaches/coach2.jpg" width="100%">
                </a>
              </li>
              <li class="dnSlide-item" style="width: 428px; height: 166px; z-index: 2; opacity: 1; left: 364.167px; top: 9.3px;">
                <a href="javascript:void(0)">
                  <img class="slide-img" src="res/img/coaches/coach1.jpg" width="100%">
                </a>
              </li>
            </ul>

          </div>
        </div> -->
        <!-- SECTION3_V2 -->
        <div class="blockContainer grey">
          <div class="testWrapper">
            <div class="blockTitle">
              <h2 class="uniH2">What our Coaches Say</h2>
            </div>
            <div class="testList container-fluid">
              <div class="row">
                <div class="testItem col-md-4">
                  <div class="testItemTitle">Quality Facility</div>
                  <div class="testItemVideoCon">
                    <!-- <video class="testItemVideo" src="" width="100%"> -->
                    <video class="testItemVideo" controls src="../res/vid/STEAM_ads.mp4"  poster="../res/img/coaches/coach1.jpg" width="100%">

                    </video>
                  </div>
                  <div class="testItemQuote">
                    <p>"Lorem ipsum dolor sit amet,  consectetur veritatis eaque doloremque totam. Qui officiis eveniet odio blanditiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, cum?" <br> <em>-- John Doe</em> </p>
                  </div>
                </div>

                <div class="testItem col-md-4">
                  <div class="testItemTitle">Benefits</div>
                  <div class="testItemVideoCon">
                    <!-- <video class="testItemVideo" src="" width="100%"> -->
                    <video class="testItemVideo" controls src="../res/vid/STEAM_ads.mp4"  poster="../res/img/coaches/coach2.jpg" width="100%">

                    </video>
                  </div>
                  <div class="testItemQuote">
                    <p>"Lorem ipsum dolor sit amet,  consectetur veritatis eaque doloremque totam. Qui officiis eveniet odio blanditiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, cum?" <br> <em>-- John Doe</em> </p>
                  </div>
                </div>

                <div class="testItem col-md-4">
                  <div class="testItemTitle">Honor and Responsibility</div>
                  <div class="testItemVideoCon">
                    <!-- <video class="testItemVideo" src="" width="100%"> -->
                    <video class="testItemVideo" controls src="../res/vid/STEAM_ads.mp4"  poster="../res/img/coaches/coach3.jpg" width="100%">

                    </video>
                  </div>
                  <div class="testItemQuote">
                    <p>"Lorem ipsum dolor sit amet,  consectetur veritatis eaque doloremque totam. Qui officiis eveniet odio blanditiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, cum?" <br> <em>-- John Doe</em> </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="applyCoachCon">
                  <div class="applyCoachWrapper">
                    <p class="hookQuote">Start your journey today with us! Become a coach! </p>

                    <button onclick="window.location.href='../pages/be_a_coach.php'" class="btn btn-success uniBtn">Apply Now</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- BLOG -->
        <div class="blockContainer " >
          <div class="blogWrapper">
            <div class="row">
              <div class="BlogTitle">
                  <h2 class="uniH2">Latest Blog</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 ">
                <div class="thumBlog">
                  <div class="postImageHome">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, laborum deserunt mollit anim id est laborum...</p>
                    <button class="btn btn-success uniBtn findClassBtn" onclick="window.location.href='../pages/readMore.php'" >Read More</button>
                  </div>
                </div>
              </div>

              <div class="col-md-4 ">
                <div class="thumBlog">
                  <div class="postImageHome">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, laborum deserunt mollit anim id est laborum...</p>
                    <button class="btn btn-success uniBtn findClassBtn" onclick="window.location.href='../pages/readMore.php'" >Read More</button>
                  </div>
                </div>
              </div>

              <div class="col-md-4 ">
                <div class="thumBlog">
                  <div class="postImageHome">
                    <a href="#"><img src="../res/img/Blog/tn_post1.jpeg" alt=""></a>
                    <span class="post-tag">Indoor</span>
                  </div>
                  <div class="postDetail">
                    <h3 class="postTitle">Benefit of Classroom Environment</h3>
                    <div class="postMeta">
                      <span class="post-author"><i class="fas fa-user"></i> John Doe </span>
                      <span class="post-date" datetime="2016-03-17T00:42:00-07:00"><i class="far fa-clock"></i> March 17, 2016</span>
                    </div>
                    <p class="post-summary">Lorem ipsum dolor sit amet, laborum deserunt mollit anim id est laborum...</p>
                    <button class="btn btn-success uniBtn findClassBtn" onclick="window.location.href='../pages/readMore.php'" >Read More</button>
                  </div>
                </div>
              </div>



            </div>


          </div>
        </div>
        <!-- SECTIONV_Mission_and_Value -->
        <div class="mvCon blockContainer grey">
          <div class="mvWrapper">
            <div class="row missionCon">
              <div class="blockTitle">
                <h2 class="uniH2">Our Mission</h2>
              </div>
              <div class="missionStatement">
                <blockquote>
                  <p>To make your children education accessible at your fingertip</p>
                  <cite>STEAM</cite>
                </blockquote>
                <p></p>
              </div>
            </div>
            <div class="row valueCon">
              <div class="blockTitle">
                <h2 class="uniH2">Our Core Values</h2>
              </div>
              <div class="valueList">
                <div class="value col-md-4">
                  <div class="valueIcon">
                    <img class="fullImg" src="../res/img/icon/vision.png" alt="">
                  </div>
                  <div class="valueText">
                    <h4>Solution Oriented</h4>
                    <p>Lorem dolores quia excepturi. Maxime non amet deleniti similique exercitationem repudiandae adipisci quaerat autem aliquam doloremque nisi enim provident id, accusamus, cumque asperiores fugiat!</p>
                  </div>
                </div>
                <div class="value col-md-4">
                  <div class="valueIcon">
                    <img class="fullImg" src="../res/img/icon/strategy.png" alt="">
                  </div>
                  <div class="valueText">

                    <h4>Solution Oriented</h4>
                    <p>Lorem dolores quia excepturi. Maxime non amet deleniti similique exercitationem repudiandae adipisci quaerat autem aliquam doloremque nisi enim provident id, accusamus, cumque asperiores fugiat!</p>
                  </div>
                </div>
                <div class="value col-md-4">
                  <div class="valueIcon">
                    <img class="fullImg" src="../res/img/icon/note.png" alt="">
                  </div>
                  <div class="valueText">
                    <h4>Solution Oriented</h4>
                    <p>Lorem dolores quia excepturi. Maxime non amet deleniti similique exercitationem repudiandae adipisci quaerat autem aliquam doloremque nisi enim provident id, accusamus, cumque asperiores fugiat!</p>
                  </div>
                </div>
              </div>
              <div class="moreAboutUs blockContainer">
                <div class="moreAboutUsWrapper">
                  <!-- <h2>More about us</h2> -->
                   <a href="../pages/About_us.php"><i class="fa fa-angle-double-right mr-3"> <i>More about Us</i></a></i>
                  <!-- <div onclick="window.location.href='../pages/readMore.php'" class="btn btn-success uniBtn">More About Us</div> -->
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- SECTION_VI -->
        <!-- <div class="grey blockContainer" >
          <div class="formMapCon">
            <div class="formMapWrapper">
              <div class="row">
                <div class="col-md-6 formCon">
                  <div class="formWrapper">
                    <h3>Message Us</h3>
                    <div class="container">
                      <form action="action_page.php">
                        <input id="fullName" type="text" id="fname" name="firstname" placeholder="Full Name" required>
                        <input id="email" type="text" id="lname" name="lastname" placeholder="Email" required>
                        <label for="sel1">Select your topic:</label>
                        <select class="form-control" id="msgTopic">
                          <option value="" selected disabled>Select your topic</option>
                          <option value="education_fee">Education fee</option>
                          <option value="schedule">Schedule</option>
                          <option value="transportation">Transportation</option>
                          <option value="others">Others</option>
                        </select>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <p>Please allow us 24 hours to get back to you. Thank you!</p>
                        <button class="btn btn-success uniBtn" type="submit" name="button">Send</button>
                      </form>
                    </div>
                  </div>

                </div>
                <div class="col-md-6 mapCon">
                  <div class="mapouter">
                    <div class="gmap_canvas">
                      <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Stamford%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                      </iframe>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="contactCon">
                <div class="contactWrapper">
                  <div class="contactOther">
                    <h2>or</h2>
                    <p>visit <a href="Contact.html">Contact Us</a> for more information</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div> -->
      <!-- CONTACTUS -->
      <div class="blockContainer ">
        <div class="contactUsWrapper">
          <div class="ContactUsTitle">
            <h2>To get more information, contact us now.</h2>
          </div>
          <div class="contactUsButton">
            <button class="btn btn-success uniBtn findClassBtn" onclick="window.location.href='../pages/contact_us.php'" >Contact Us</button>
          </div>

        </div>
      </div>
      <?php

      include('Footer.php')
      ?>
      </div>
    </div>

  </body>
  <link rel="stylesheet" href="../CSS/master.css">

</html>
