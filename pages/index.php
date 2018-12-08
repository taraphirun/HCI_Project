<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STEM</title>
</head>
<body>
	 <div id="home">
      <div class="greeting">
        <h1>STEM</h1>
        <h3>Knowledge is Treasure</h3>
        <div class="scrollArrow">
        </div>
        <div class="overlay"></div>
      </div>
    </div>
    <div class="container-fluid fullScreen">
      <section class="skewedR">
        <div class="row rSkewed" >
          <div class="col-md-6 ">
            <section class="video embed-responsive embed-responsive-16by9">
              <video controls>
                <source src="../vid/STEM_ads.mp4" type="video/mp4">
                <track src="../vid/STEM_ads.vtt" kind="subtitles" srclang="en" label="English" />
              </video>
            </section>
          </div>
          <div class="col-md-6">
            <section class="descr">
              <h1>STEM ADS</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iste, ullam enim non ex. Eligendi ipsum, neque minus ut rem impedit iure eos, veniam quas voluptates accusantium, sapiente quibusdam, quaerat nesciunt necessitatibus accusamus modi cupiditate dicta maxime! Fuga quod, dolorem doloremque.</p>
              <button class="btn btn-success" type="button" name="button">Find a class near you</button>
            </section>
          </div>
        </div>
      </section>
<!-- SECTION2 -->
      <div class="row videoContainer">
        <div class="col-md-6 descr">
          <h1>Be Our Coach</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, dolore qui dolores ab quos earum. Doloremque accusantium impedit perspiciatis vero ducimus sint nam, quam deserunt. Sunt officia sequi totam cupiditate a quisquam repellat, consectetur, velit tenetur. Asperiores inventore eaque odit perspiciatis repellendus voluptas laboriosam, accusamus, atque eum aliquid maxime unde.</p>
            <button class="btn btn-success" type="button" name="button">Apply Now</button>
        </div>
        <div class="col-md-6">
          <section class="video embed-responsive embed-responsive-16by9">
            <video controls>
              <source src="../vid/STEM_ads.mp4" type="video/mp4">
              <track src="../vid/STEM_ads.vtt" kind="subtitles" srclang="en" label="English" />
            </video>
          </section>
        </div>
      </div>
<!-- SECTION3 -->
    <div class="unSkewed">
      <h1>Latest Blog Posts</h1>
      <div class="row">

        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/blog1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/blog1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/blog1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/blog1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>


      </div>
    </div>
</body>

<?php 
include 'Footer.php';
?>
</html>