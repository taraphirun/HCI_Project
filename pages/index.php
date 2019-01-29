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
          <div class="overlay"></div>
          <h1>Find the <strong>BEST Class</strong> for your children</h1>
          <button class="btn btn-success findClassBtn">Find Class Now</button>
        </div>
      </div>
      <div class="recommendation">
        <div class="recTitle">
          <h2>Most <strong>Popular</strong> Classes</h2>
        </div>
        <div class="recContent">
          <div class="recom">
            <div class="recImgCon">
              <img class="recImg" src="../res/img/class/lego.jpeg" alt="">
            </div>
            <div class="recMeta">
              <h3>LEGO Robotic</h3>
              <div class="metaInfo age">3 - 5 years old</div>
              <div class="metaInfo time">9:30 - 10:00</div>
              <div class="metaInfo place">LA Hight School</div>
              <div class="learnMore">
                <div class="btn btn-success">Learn More</div>
              </div>
            </div>
          </div>
          <div class="recom">
            <div class="recImgCon">
              <img class="recImg" src="../res/img/class/soccer.jpg" alt="">
            </div>
            <div class="recMeta">
              <h3>Kid Soccer</h3>
              <div class="metaInfo age">4 - 6 years old</div>
              <div class="metaInfo time">16:30 - 17:00</div>
              <div class="metaInfo place">LA Hight School</div>
              <div class="learnMore">
                <div class="btn btn-success">Learn More</div>
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
                <video class="steam_vid" src="../res/vid/STEAM_ads.mp4" poster="../res/img/explain.png"autoplay controls>

                </video>
              </div>
              <div class="col-md-6">
                <div class="center">
                  <h2>Here's How We Do What We Do</h2>
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
                    <button class="btn btn-success button">Find Class</button>
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
              <h2>What our Coaches Say</h2>
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
                  <div class="testItemTitle">Qualified Staffs</div>
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

                    <button class="btn btn-success">Apply Now</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SECTIONV_Mission_and_Value -->
        <div class="mvCon blockContainer">
          <div class="mvWrapper">
            <div class="row missionCon">
              <div class="blockTitle">
                <h2>Our Mission</h2>
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
                <h2>Our Core Values</h2>
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

            </div>
          </div>
        </div>
        <!-- SECTION_VI -->
        <div class="grey blockContainer" >
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
                        <!-- <label for="sel1">Select your topic:</label> -->
                        <select class="form-control" id="msgTopic">
                          <option value="" selected disabled>Select your topic</option>
                          <option value="education_fee">Education fee</option>
                          <option value="schedule">Schedule</option>
                          <option value="transportation">Transportation</option>
                          <option value="others">Others</option>
                        </select>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <p>Please allow us 24 hours to get back to you. Thank you!</p>
                        <button class="btn btn-success" type="submit" name="button">Send</button>
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
          </div>

      </div>

    </div>
  <!-- SCRIPT -->

  <script src="https://cdn.bootcss.com/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/dnSlide.js"></script>
  <script src="js/expandJS.js"></script>
  <script>

    jQuery(document).ready(function($) {

        $(".dnSlide-main").each(function(index, el) {
            var setting = {
                "response" : true ,
                afterClickBtnFn :function(i){ console.log(i); }
            };
            switch (index) {
                case 0:
                    setting.verticalAlign = "top" ;
                    setting.switching     = "custom" ;
                    setting.precentWidth  = "25%" ;
                    var api = $(el).dnSlide(setting).data( "dnSlide" );
                    $(".hide").on("click",function(){
                        api.hide(function(){
                            alert('HIDEEN！！！');
                        });
                    });
                    $(".show").on("click",function(){
                        api.show(function(){
                            alert('SHOW！！！');
                        });
                    });
                    break;
                case 1:
                    setting.autoPlay  =  true ;
                    $(el).dnSlide(setting);
                    break;
                case 2:
                    setting.verticalAlign = "bottom" ;
                    $(el).dnSlide(setting);
                    break;
                default:
                    $(el).dnSlide(setting);
                    break;
            }
        });
    });
    </script>
  </body>
</html>


<?php 
include 'Footer.php';
?>
</html>