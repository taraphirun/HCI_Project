<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="../CSS/Blog.css">

	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<h1>BLOG</h1>
	<div class="blog">
	<ul class="filter-links">
  <li><a href="#">All</a></li>
  <li><a href="#">Javascript</a></li>
  <li><a href="#">Html</a></li>
  <li><a href="#">Css</a></li>
  <li><a href="#">Php</a></li>
</ul>


<div class="filter-sections">
  <div class="javascript">Javascript</div>
  <div class="html">Html</div>
  <div class="php">Php</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="php">Php</div>
  <div class="html">Html</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="html">Html</div>
  <div class="php">Php</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="php">Php</div>
  <div class="html">Html</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="html">Html</div>
  <div class="html">Html</div>
  <div class="php">Php</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="php">Php</div>
  <div class="html">Html</div>
  <div class="javascript">Javascript</div>
  <div class="html">Html</div>
  <div class="php">Php</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="php">Php</div>
  <div class="html">Html</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="html">Html</div>
  <div class="php">Php</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="php">Php</div>
  <div class="html">Html</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="html">Html</div>
  <div class="html">Html</div>
  <div class="php">Php</div>
  <div class="css">Css</div>
  <div class="javascript">Javascript</div>
  <div class="php">Php</div>
  <div class="html">Html</div>
</div>
</div>
	<?php
include 'footer.php';
?>
	<script src="../js/Blog.js"></script>
</body>
</html>
<style>
	* {
  box-sizing: border-box;
}


 .blog{
  margin: 0px 200px;
  position: relative;
  height: 100%;
}

.filter-links {
  margin: 0;
  padding: 0;
  list-style: none;
  display: block;
  width: 100%;
  height:auto;
  overflow: hidden;
  background: white;
  border-bottom:1px solid #E4D7D7;
}

.filter-links li {
  display: inline;
  float: left;
}

.filter-links li a {
  display: block;
  color: black;
  padding: 1em 2em;
  text-decoration: none;
}

.filter-links li a:hover {
  color: red;
}

.filter-sections {
  width: 100%;
  display: block;
  overflow: hidden;
}

.filter-sections div {
  opacity: 0;
  display: none;
  min-height: 50px;
  margin: 0.5em;
  text-align: center;
  padding: 2em 1em;
  float: left;
  transition: all 500s ease;
}

.view {
  display: block !important;
  opacity: 1 !important;
  transform: scale(1) rotate(0deg);
  border-radius:4px;
  animation: selected 300ms 1 ease-in-out;
}

@keyframes selected {
  0% {
    border-radius:100%;
    transform: scale(0) rotate(-180deg);
  }
}

.javascript{
  background-color:yellow;
  color:black;
}
.html{
  background:blue;
  color:white;
}
.css{
  background:red;
  color:white;
}
.php{
  background:brown;
  color:white;
}
</style>

