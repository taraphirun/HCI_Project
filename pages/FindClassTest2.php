
<div class="row">
<div class="col-md-1">

	<div><input type="text" class="quicksearch" placeholder="Search"/></div>
	
	<div class="output">*</div>

	<h6>Resource Types</h6>
	<ul class="options">
		<li class="input-all"><input class="all" type="checkbox" value=".all-resources" id="all-resources"><label for="all-resources">All Resources</label></li>
		<li><input type="checkbox" value=".data-sheet" id="data-sheet"><label for="data-sheet">Data Sheet</label></li>
		<li><input type="checkbox" value=".video" id="video"><label for="video">Video</label></li>
	</ul>

	<h6>Services</h6>
	<ul class="options">
		<li class="input-all"><input class="all" type="checkbox" value=".all-services" id="all-services"><label for="all-services">All Services L1</label></li>
		<li><input type="checkbox" value=".ams" id="ams"><label for="ams">AMS</label></li>
		<li><input type="checkbox" value=".fm" id="fm"><label for="fm">FM</label></li>
	</ul>

</div>

<div class="col-md-9">
	
	<div class="grid clearfix">
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
		<div class="element-item data-sheet fm" data-category="data-sheet">DS - FM</div>
		<div class="element-item data-sheet fm" data-category="data-sheet">DS - FM</div>
		<div class="element-item video ams" data-category="video">VD - AMS</div>
		<div class="element-item video fm" data-category="video">VD - FM</div>
		<div class="element-item video fm" data-category="video">VD - FM</div>
		<div class="element-item video ams" data-category="video">VD - AMS</div>
		<div class="element-item video ams" data-category="video">VD - AMS</div>
		<div class="element-item data-sheet fm" data-category="data-sheet">DS - FM</div>
		<div class="element-item data-sheet fm" data-category="data-sheet">DS - FM</div>
		<div class="element-item video fm" data-category="video">VD - FM</div>
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
		<div class="element-item video" data-category="video">VD</div>
		<div class="element-item video" data-category="video">VD</div>
		<div class="element-item data-sheet" data-category="data-sheet">DS</div>
		<div class="element-item video ams" data-category="video">VD - AMS</div>
		<div class="element-item data-sheet" data-category="data-sheet">DS</div>
		<div class="element-item data-sheet" data-category="data-sheet">DS</div>
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
		<div class="element-item data-sheet fm" data-category="data-sheet">DS - FM</div>
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
		<div class="element-item data-sheet ams" data-category="data-sheet">DS - AMS</div>
	</div>
	</div>
	
</div>


<style>
	body { 
  font-family: arial, sans-serif;
  font-size: 16px;
  color: #15404B;
  font-weight: 300;
}
ul.options > li { list-style: none; }
ul.options > li input,
ul.options > li label{
	display: inline-block;
	margin-right: 10px; }
ul.options > li.input-all label {
	font-weight: 600; }
input.quicksearch,
.output {
	display: block;
	line-height: normal;
  padding: 0px 8px;
	margin: 0px;
  border: 1px solid #D6D6D6; /*osv:border*/
  height: 38px;
  line-height: 38px;
  min-width: 400px;
  margin: 10px;
}
.output { border-width: 1px 0px 0px 0px; }
.columns {
  display: block;
  width: 50%;
  float: left;
  box-sizing: border-box;
  padding: 20px;
}
.grid > div {
	display: block;
	float: left;
	width: 20%;
	height: auto;
	padding: 15px;
	margin-right: 5%;
	margin-bottom: 20px;
	box-sizing: border-box;
	background: rgba(211,211,211,1.00);
}
</style>


<script>
	
</script>