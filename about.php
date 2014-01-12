<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" style="" class=" js no-touch csstransforms3d csstransitions webkit chrome win js js">
<?php include('header.php'); ?>
<style>
	.two-col {
	width: 30%;float:left;
	}
	.faktory-team-item, .faktory-team-secondary-info {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	}
	.faktory-team-secondary-info {
	position: absolute;
	width: 100%;
	height: 100%;
	padding: 4.5em 15%;
	border-radius: 50%;
	opacity: 0;
	top: 0;
	left: 0;
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-ms-transform: scale(0);
	-o-transform: scale(0);
	transform: scale(0);
	-webkit-backface-visibility: hidden;
	}
	.faktory-team-item:hover .faktory-team-secondary-info {
	opacity: 1;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
	}
	.faktory-bio-info
	{
	text-align: justify;
	padding: 5%;
	}
	.name
	{
		text-align: center;
		font-size: 22px;
	}
	.fc-slideshow {
	position: relative;
width: 220px;
height: 220px;
border-radius: 25%;
margin: 10px;
border-top-right-radius: 0%;
margin: 0 auto;
border-bottom-left-radius: 0%;
margin: 10px;
-webkit-perspective: 1200px;
-moz-perspective: 1200px;
perspective: 1200px;
top: 6px;
float: left;
text-align: center;
	}
	.course_names
	{
	margin-top: 43%;
	font-size: 25px;
	
	}
	.fc-slideshow
	{
border:10px solid #1F81FF;background: #ddd;color:#000;margin-left: 5%;
	}
	.fc-slideshow:hover
	{
	color:#fff;
	background: #4096ee; /* Old browsers */
	background: -moz-linear-gradient(top,  #4096ee 0%, #4096ee 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4096ee), color-stop(100%,#4096ee)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #4096ee 0%,#4096ee 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #4096ee 0%,#4096ee 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #4096ee 0%,#4096ee 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #4096ee 0%,#4096ee 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4096ee', endColorstr='#4096ee',GradientType=0 ); /* IE6-9 */
	
	
	/*position where      
enlarged image should offset horizontally */
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
	}

	.detailed
	{
	margin-top:30px;
	margin-left:100px;}
	
</style>
<!-- content -->
<div class='content'>
<div class='container'>
 <h2><strong>Courses</strong></h2>
	<div style='margin:0 auto;'>
	<a href='developers.php'>
		<div id="fcSlideshow" class="fc-slideshow developers">
		<div  class='course_names'>MISSION & VISION</div>
		</div>
	</a>
	
	<a href='administrator.php'>
		<div id="fcSlideshow" class="fc-slideshow administrators">
		<div  class='course_names'>EXECUTIVE BOARD</div>
		</div>
	</a>
	
	<a href='analyst.php'>
		<div id="fcSlideshow" class="fc-slideshow analyst">
		<div class='course_names'>OUR CLIENTS</div>
		</div>
	</a>
	</div>
	
</div></div>
<!-- /content -->
        <!-- footer -->
<?php include('footer.php');?>    
	<!-- /footer -->
    </div>
<!-- wrapper --></body></html>