<?php

include('header.php')

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!DOCTYPE html>
<style media="screen">
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  /* margin-bottom: 16px; /* Bottom margin */ */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}
input#fullName{
  background: url(../res/img/lnr-user.svg) no-repeat scroll 5px 5px;
  background-position: 1% 40%;
  background-color: white;
  padding-left:30px;
}
input#email{
  background: url(../res/img/lnr-envelope.svg) no-repeat scroll 5px 5px;
  background-position: 1% 40%;
  background-color: white;
  padding-left:30px;
}
#msgTopic option{
  padding: 20px;
}
.formWrapper{
  padding: 50px 0 0 0 ;
  float: left;
}

</style>
<link rel="stylesheet" href="../CSS/master.css">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>




    <div style="background-color:#005051;color:#FCFCFC;">
        <br>
        <br>
        <h3 style="text-align: center;font-size: 40px">KEEP IN TOUCH WITH STEAM</h3>
        <div class="row">
            <div class="col-md-4" style="display: inline-block;text-align: center; padding:50px;">
                <i class="fa fa-map-marker" style="font-size: 60px" aria-hidden="true"></i><br>
                <h2 style="font-size: 10px">ADDRESS</h2><br>
                <h3 style="font-size: 16px">Weifield Group Contracting</h3>
                <p>6950 S. Jordan Road<br>
                    Centennial, CO 80112</p>
                <br>
                <h3 style="font-size: 16px">Northern Division Office</h3>
                <p>1270 Automation Drive<br>
                    Windsor, CO 80550</p>
                <br>
                <h3 style="font-size: 16px">Wyoming Office</h3>
                <p>6950 S. Jordan Road<br>
                    Centennial, CO 80112</p>
            </div>
            <div class="col-md-4" style="display: inline-block;text-align: center; padding:50px">
                <i class="fa fa-phone" style="font-size: 60px" aria-hidden="true"></i><br>
                <h2 style="font-size: 10px">PHONE</h2><br>
                <h3 style="font-size: 16px">Weifield Group Contracting</h3>
                <p>303.428.2011 phone<br>
                    303.202.0466 facsimile</p>
                <br>
                <h3 style="font-size: 16px">Northern Division Office</h3>
                <p>303.428.2011 phone<br>
                    303.202.0466 facsimile</p>
                <br>
                <h3 style="font-size: 16px">Wyoming Office</h3>
                <p>512.365.9006 phone<br>
                    Contact: Nate Anderson,<br> TX Division President</p><br>

            </div>
            <div class="col-md-4" style="display: inline-block;text-align: center; padding:50px;">
                <i class="fa fa-envelope" style="font-size: 60px" aria-hidden="true"></i><br>
                <h2 style="font-size: 10px">EMAIL</h2><br>
                <h3 style="font-size: 16px">Weifield Group Contracting</h3>
                <p>steam@info.com</p>
                <br>
                <h3 style="font-size: 16px">Northern Division Office</h3>
                <p>thesteamgroup@info.com</p>
                <br>
                <h3 style="font-size: 16px">Wyoming Office</h3>
                <p>steamadmin@admin.com</p><br>
                <h3 style="font-size: 16px">Employment Opportunities</h3>
                <p>steamadmin@hire.com</p>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 50px;background-color:#fff">
        <div class="col-md-6" style="display:inline-block;">
          <h2 class="uniH2" style="color:#08A491;font-size: 40px">
              Message Us
          </h2>
          <div class="container">
            <form action="action_page.php">
              <input id="fullName" type="text" id="fname" name="firstname" placeholder="Full Name" required>
              <input id="email" type="text" id="lname" name="lastname" placeholder="Email" required>
              <!-- <label for="sel1">Select your topic:</label> -->
              <select class="form-control" id="msgTopic" required>
                <option value="" selected disabled>I am interested as</option>
                <option value="4">Potential Coach</option>
                <option value="1">Grandarents</option>
                <option value="3">Guardians</option>
                <option value="5">Parents</option>
              </select>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
              <p>Please allow us 24 hours to get back to you. Thank you!</p>
              <button class="uniBtn btn btn-success" type="submit" name="button">Send</button>
            </form>
          </div>
        </div>
          <!-- <div class="col-md-6 mapCon"> -->

          <!-- </div> -->
            <!-- <h3 style="color:#142E7A;font-size: 40px">
                Message Us
            </h3>
              <br>
              <p>
                If you wish to be considered for employment at Steam, please do not send a message, here – instead, please complete Weifield’s job application  and our Human Resources department will contact you after their review of your submitted information.
            </p>
            <img src="../img/stemlogo.png" alt="steamlogo" style="display: inline-block;"> -->
        <!-- </div> -->

        <div class="col-md-6" style="display: inline-block;">
          <div class="formWrapper">
            <!-- <h3>Message Us</h3> -->
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="700" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Stamford%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    <h2 class="uniH2" style="padding: 50px;color:#08A491;font-size: 40px;text-align: center;background-color: #f4f4f5;margin-bottom: -20px ">Designed for your kids</h2>
    <div class="row" style="text-align: center;background-color: #f4f4f5">
        <div class="col-md-4">
            <i class="fa fa-handshake-o" aria-hidden="true" style="font-size: 60px"></i>
            <h3>Trust</h3>
            <p style="padding: 40px">STEAM vales trust and partnership. With professionals and security, your kids and their learnings will be well taken care of.</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 60px"></i>
            <h3>Professionalism</h3>
            <p style="padding: 40px">Using our systematic way of booking and executing, you don't have to worry about wasting your money and time. </p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-certificate" aria-hidden="true" style="font-size: 60px"></i>
            <h3>Certification</h3>
            <p style="padding: 40px">Hired only certified coached and staff, STEAM is known for its certifications. Kids graduating from each will also be awarded with different certificates.</p>
        </div>
        </div>
    <!-- Footer -->
</body>

</html>

</div>

<?php

include('footer.php')

?>
</body>
</html>
