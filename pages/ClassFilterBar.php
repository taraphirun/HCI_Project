<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/filterContent.css"> 
  <script src="../js/modernizr.js"></script> 
</head>
<body>
  <div class="cd-filter">
      <form>
        <div class="cd-filter-block">
          <h4>Search By Instructor Name</h4>
          
          <div class="cd-filter-content">
            <input type="search" placeholder="Instructor Name">
          </div> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->

        <div class="cd-filter-block">
          <h4>Check boxes</h4>

          <ul class="cd-filter-content cd-filters list">
            <li>
              <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                <label class="checkbox-label" for="checkbox1">Closests To You</label>
            </li>

            <li>
              <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
              <label class="checkbox-label" for="checkbox2">Lastest Release</label>
            </li>

            <li>
              <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
              <label class="checkbox-label" for="checkbox3">Upcoming Season</label>
            </li>
          </ul> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->

        <div class="cd-filter-block">
          <h4>Select by Age</h4>
          
          <div class="cd-filter-content">
            <div class="cd-select cd-filters">
              <select class="filter" name="selectThis" id="selectThis">
                <option value="">Choose an option</option>
                <option value=".option1">Closest To Me</option>
                <option value=".option2">Current Date</option>
                <option value=".option3">Upcoming Season</option>
              </select>
            </div> <!-- cd-select -->
          </div> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->

       
      </form>

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filters</a>
</body>

 </main> <!-- cd-main-content -->
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/jquery.mixitup.min.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
</html>
