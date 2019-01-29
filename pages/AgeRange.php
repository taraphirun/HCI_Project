<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>RangeSlider</title>
  </head>
  <body>
    <div class="container1">
        <form action="/">
          <div class="row">
            <div id="comission" class="col-md-12">
              <label>
                  <h5>Age: <span id="comissionLabel"></span> </h5>
                  <!-- <span class="infoicon" tabindex="0" data-toggle="" title="Info about input field!" data-placement="bottom">i</span> -->
              
            
              <input class="custom-range" type="range" min="0" max="8" step="0.5" id='input'>

            </div>
          </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>

<style>
  h4 {
  padding-top: 2rem;
}
#input{
  length: 400px;
}

</style>

<script>
  // RangeSlider Workaround
const comission = document.querySelector('#comission input');
const comissionLabel = document.getElementById('comissionLabel');
const comissionLabelPrefix = comissionLabel.innerHTML;
const comissionRange = document.createElement('label');

comissionRange.id = 'rangeLimits';
comissionRange.className = 'row';
comissionRange.innerHTML = `<span class="col-6 text-left">${comission.getAttribute('min')}</span><span class="col-6 text-right">${comission.getAttribute('max')}</span>`;
document.querySelector('#comission').appendChild(comissionRange);

comissionLabel.innerHTML = `${comissionLabelPrefix}${comission.value}`;

comission.addEventListener('input', function() {
    comissionLabel.innerHTML = `${comissionLabelPrefix}${Number(comission.value).toFixed(0)}`;
}, false);

// Bootstrap Tooltips Actuivation
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>