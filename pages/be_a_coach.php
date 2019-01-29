<?php 
 include ('header.php')
 ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script> -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Be A COACH</title>
    <style>
        /* Global CSS, you probably don't need that */

    .clearfix:after {
        clear: both;
        content: "";
        display: block;
        height: 0;
    }

    .container {
        font-family: 'Lato', sans-serif;
        width: 100%;
        margin: auto;
        text-align: center;
        display: inline-block;
       

    }

    .wrapper {
        display: table-cell;
        height: 300px;
        vertical-align: middle;
    }

    /*.nav {
        margin-top: 40px;
    }*/

    .pull-right {
        float: right;
    }

    a,
    a:active {
        color: #17202A;
        text-decoration: none;
    }

    a:hover {
        color: ##08A491;
    }

    /* Breadcrups CSS */

    .arrow-steps .step {
        font-size: 14px;
        text-align: center;
        color: #666;
        cursor: default;
        margin: 0 3px;
        padding: 10px 10px 10px 30px;
        min-width: 180px;
        float: left;
        position: relative;
        background-color: #d9e3f7;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: background-color 0.2s ease;
    }

    .arrow-steps .step:after,
    .arrow-steps .step:before {
        content: " ";
        position: absolute;
        top: 0;
        right: -17px;
        width: 0;
        height: 0;
        border-top: 19px solid transparent;
        border-bottom: 17px solid transparent;
        border-left: 17px solid #d9e3f7;
        z-index: 2;
        transition: border-color 0.2s ease;
    }

    .arrow-steps .step:before {
        right: auto;
        left: 0;
        border-left: 17px solid #fff;
        z-index: 0;
    }

    .arrow-steps .step:first-child:before {
        border: none;
    }

    .arrow-steps .step:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .arrow-steps .step span {
        position: relative;
    }

    .arrow-steps .step span:before {
        opacity: 0;
        content: "✔";
        position: absolute;
        top: -2px;
        left: -20px;
    }

    .arrow-steps .step.done span:before {
        opacity: 1;
        -webkit-transition: opacity 0.3s ease 0.5s;
        -moz-transition: opacity 0.3s ease 0.5s;
        -ms-transition: opacity 0.3s ease 0.5s;
        transition: opacity 0.3s ease 0.5s;
    }

    .arrow-steps .step.current {
        color: #fff;
        background-color: #23468c;
    }

    .arrow-steps .step.current:after {
        border-left: 17px solid #23468c;
    }

    #intro{
        background-image:url("../img/coach_child.jpg");
  width:100%;
  height:90%;
  background-repeat:no-repeat;
  background-size:cover;
    }

      #leader{
        background-image:url("../kids.jpg");
        background-color: #f4f4f5;
  width:100%;
  height:80%;
  background-repeat:no-repeat;
  background-size:cover;
    }


  li{
    margin:15px;
  /*. */
  }

  #float {
    position: fixed;
    width: 150px;
    padding: 8px;
    bottom: 100px;
    right: 50px;
    background-color: #5bc0af;
    color: #FFF;
    border-radius: 8px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 10;
}

.row{
    margin-top:40px;
    padding: 0 10px;
}

.clickable{
    cursor: pointer;   
}

.panel-heading span {
    margin-top: -20px;
    font-size: 15px;
}
/***********************************************/
/***************** Accordion ********************/
/***********************************************/
/*@import url('https://fonts.googleapis.com/css?family=Tajawal');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');*/

section{
    padding: 60px 0;
}

#accordion-style-1 h1,
#accordion-style-1 a{
    color:#007b5e;
}
#accordion-style-1 .btn-link {
    font-weight: 400;
    color: #007b5e;
    background-color: transparent;
    text-decoration: none !important;
    font-size: 16px;
    font-weight: bold;
    padding-left: 25px;
}

#accordion-style-1 .card-body {
    border-top: 2px solid #007b5e;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main{
    display:none;
}

#accordion-style-1 .card-header .btn .fa.main{
    background: #007b5e;
    padding: 13px 11px;
    color: #ffffff;
    width: 35px;
    height: 41px;
    position: absolute;
    left: -1px;
    top: 10px;
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
    display:block;
}
    </style>
</head>

<body>
    <a href="job_form.html" id ="float">APPLY NOW</a>
    <div id="intro">
        <div class="container">
            <div class="wrapper">
                <div class="arrow-steps clearfix">
                    <div class="step current"> <span> Sign up as a Coach</span> </div>
                    <div class="step"> <span>Fill in Application Form</span> </div>
                    <div class="step"> <span> Pass Evaluation Process</span> </div>
                    <div class="step"> <span>Hired as a Coach</span> </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display: inline-block;text-align: center; padding:50px;color:#08A491;background-color: #f4f4f5  ">
        <h1 style="padding: 10px;text-align: center;font-size:60px;color:#D56212;background-color: #f4f4f5">Benefits</h1>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 60px"></i>
                <h2>Do what You Love</h2>
                <p>
                    If working with kids and inpiring kids are your passions, then STEAM is the place for you. Strengthen your passion and do what you love most.
                </p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-users" aria-hidden="true"  style="font-size: 60px"></i>
                <h2>Gain your Confidence and Leadership skills</h2>
                <p>With trainings and worksops, coaches are able to boost their confidence and enhance their leaderships skill day by day.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-globe" aria-hidden="true" style="font-size: 60px"></i>
                <h2>Be Part of the Change</h2>
                <p>Kids are the foundations of change. Be a good influence on them and contribution to the positive global changes.</p>
            </div>
        </div>
    </div>
    <!--  <div style="background-color: white;height:10px">
        
    </div>
 -->
    <div style="display: inline-block;text-align: center; padding:50px;color:#17202A;background-color:#E8F6F3  ">
        <h1 style="padding: 20px;text-align: center;font-size:50px;color:#D56212;background-color:#E8F6F3  ">Being a Coach</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="grid-item"><a href="https://www.mhelpdesk.com/customers/?wvideo=bern5suost"><img src="https://embedwistia-a.akamaihd.net/deliveries/77b28d1d0cec51fa572b68b1420bf9223e9052f8.jpg?image_play_button_size=2x&amp;image_crop_resized=960x540&amp;image_play_button=1&amp;image_play_button_color=54bbffe0" width="400" height="225" style="width: 400px; height: 225px;"></a><br>
                    <p><br>"Working as a Coach at STEAM has taught me many things in life. As I am teaching kids new skills and talents, I discover new things about myself."-<i>John McKenzie</i></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-item"><a href="https://www.mhelpdesk.com/customers/?wvideo=36hpilwhmx"><img src="https://embedwistia-a.akamaihd.net/deliveries/fa7ce5f189573f1c62ca42a52c06baea484c3a22.jpg?image_play_button_size=2x&amp;image_crop_resized=960x540&amp;image_play_button=1&amp;image_play_button_color=54bbffe0" width="400" height="225" style="width: 400px; height: 225px;"></a><br>
                    <p><br>"I started of as a coach assistant. After two months of training, I gain the skill sets and confidence to become a coach. Come and be a coach at STEAM."-<i>Samantha Rose</i></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-item"><a href="https://www.mhelpdesk.com/customers/?wvideo=x37d2r2tdz"><img src="https://embedwistia-a.akamaihd.net/deliveries/725032dc69b4e99cceb66c5c1521a00bf4429077.jpg?image_play_button_size=2x&amp;image_crop_resized=960x540&amp;image_play_button=1&amp;image_play_button_color=54bbffe0" width="400" height="225" style="width: 400px; height: 225px;"></a><br>
                    <p><br>"Having kids smile, learn, and grow is something I always like to see and it always make me happy. I feel like I am a part of something big working at STEAM."<i>-Mick Harley</i></p>
                </div>
            </div>
        </div>
    </div>
<!--     <h1 style="padding: 20px;text-align: center;font-size:50px;color:#D56212;"><b>How to Become a Coach?</b></h1> -->
    <!-- <div id="leader" style="display: inline-block;text-align: center; padding:50px;">
       
        <div style="width: 40%;border-radius: 6px;background-color: rgba(227, 236, 238, 0.48);">
            <br>
            <h2 style="color:#3867C6  ">Begin your journey as a leader...</h2>
            <br>
            <ol style="text-align: left;color:#17202A;">
                <li><a href=""><b>Who can become a coach?</b></a></li>
                <li><a href=""><b>How flexible is the work?</b></a></li>
                <li><a href=""><b>How much can I earn as a coach?</b></a></li>
                <li><a href=""><b>Coach Certification</b></a></li>
                <li><a href=""><b>How do I start?</b></a></li>
                <li><a href=""><b>How can I nominate a person?</b></a></li>
                <br>
            </ol>
        </div>
    </div> -->
        <!-- Accordion -->
<div style="background-color:#B2D0C8;text-align: center;display: inline-block;width: 100%">
<div class="container-fluid bg-gray" id="accordion-style-1">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-green mb-4 text-center" style="padding: 20px;text-align: center;font-size:50px;color:#D56212;">Frequently Asked Questions</h1>
                </div>
                <div class="col-10 mx-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              </i><i class="fa fa-angle-double-right mr-3"></i>Who Can become a Coach?
                            </button>
                          </h5>
                            </div>

                            <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anyone from the age of 23 to 45 with a bachelors degree and the passion of working with kids can become a coach at Steam. Please click on the apply now button to learn more about the requirements and see wether you are legible of being a coach. If you are interested, please contact us and let us know.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>How Flexible is the work?
                            </button>
                          </h5>
                            </div>
                            <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fa fa-expeditedssl main"></i><i class="fa fa-angle-double-right mr-3"></i>How much can I earn as a coach?
                            </button>
                          </h5>
                            </div>
                            <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/sunlimetech/convert-bootstrap-or-html-to-wordpress-for-global-devices" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <i class="fa fa-envelope main"></i><i class="fa fa-angle-double-right mr-3"></i>How can I nominate a person?
                            </button>
                          </h5>
                            </div>
                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/sunlimetech/do-web-development-in-pure-php-and-frameworks" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <i class="fa fa-envelope main"></i><i class="fa fa-angle-double-right mr-3"></i>Do I get any certification?
                            </button>
                          </h5>
                            </div>
                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/sunlimetech/do-web-development-in-pure-php-and-frameworks" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <i class="fa fa-envelope main"></i><i class="fa fa-angle-double-right mr-3"></i>How do I start?
                            </button>
                          </h5>
                            </div>
                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/sunlimetech/do-web-development-in-pure-php-and-frameworks" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
    </div>
    </div>
<!-- .// Accordion -->
     </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5">
        <div style="background-color: #5bc0af;">
            <div class="container">
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                        <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
                        <!--Linkedin -->
                        <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
                        <!--Instagram-->
                        <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
        </div>
        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">
            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Company name</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Your Account</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Help</a>
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3" style="background-color: #f4f4f5">© 2018 Copyright:
            <a class="dark-grey-text" href="https://mdbootstrap.com/education/bootstrap/"> HUIHUIHUI.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>