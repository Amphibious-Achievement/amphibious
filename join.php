<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="SHORTCUT ICON" href="pics/favicon.ico">
	<meta name="robots" content="follow">
	<title>Amphibious Achievement | Join</title>
	<meta name="author" content="Turner Bohlen">
	<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/style2.css" type="text/css"></link>
	<link rel="stylesheet" href="css/whatwedo_style.css" type="text/css"></link>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/slimbox2.js" type="text/javascript"></script>
	<script src="js/pageswitchers.js" type="text/javascript"></script>
	<!-- Date: 2011-03-15 -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22285797-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</head>
<body>
	<div id="whatwedowrap" class="wrap">
		<?php include("inc/nav3.html") ?>
        <img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 781px; top: 100px;" />
        <div class="pagewrap">
        	<div class="pagecolumn1">
        		<div class="subtitle">For College Students</div>
				<div class="blurb" width="1200px">
                If you are interested in joining Amphibious Achievement as a tutor, coach, mentor or any other capacity, please fill out an <a href="https://docs.google.com/spreadsheet/viewform?formkey=dHJkZUx4MlRvX3g5ZXFIaUVaeHF2Mmc6MQ">application</a>!<b>  The application deadline is Friday 2/17 at 11:59pm. </b><br><br> A few important details to know about Amphibious Achievement before applying:<br>
                    <ul><li> <b>Our Sunday sessions run from 9am-1pm every Sunday </b>(except on holidays). Tutors are expected to come from 11am-1pm and coaches are expected to come from 9am-11am.  You can either be a tutor, coach or both!
                    <li> <b>Tutors have optional Saturday training sessions every week.</b>  At the training sessions, tutors can acquaint themselves with the material for the following Sunday session and discuss the curriculum.  The exact timing of these will be announced based on mentors availability.
                    <li> <b>Just as our Achievers are expected to succeed on and off the water, our mentors are also expected to be mentors on and off the water.</b>  That means calling your Achievers once during the week, learning the material before Sunday and picking up pastries from ABP once a semester. 
                    </ul>
                    Criteria (things we look for in a mentor!):
                    <ul><li><b>Motivated, committed and fun (yes, triple threat)</b>
                    <li><b>Interested in education and/or tutoring or coaching</b>
                    <li><b>Comfortable teaching challenging concepts in clear and relatable ways. </b><br>
                    </ul>
				
				</div>
				
			</div>
			<div class="divider"></div>
		  <div class="pagecolumn2">
				<div class="subtitle" style="margin-left: 30px">For High School Students</div>
				<div class="blurb" style="margin-left: 30px">
                Check out our new Spring 2012 Application. <br><br>It's due February 17th at 11:59pm, so apply ASAP!<br><br>
                <a href="https://docs.google.com/spreadsheet/viewform?formkey=dEQzUE1JVWhDdjU1SHh1bE92dDVqUHc6MQ">Amphibious Achievement Spring 2012 Application!</a><br>
                </div>
			</div>
			<!--<div class="videowrap">
			<div id="videoheader">
			Athletics and Academics in Action
			</div>
			<div class="videotitle">
			"Lean with it, Rock with it."
			</div>
			<div class="videobox">
				<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="303" width="352">
					<param name="src" value="http://amphibious.mit.edu/movies/leanwithit.mov">
					<param name="autostart" value="false" />
					<param name="autoplay" value="false" />
					<param name="controller" calue="true" />
					<param name="type" value="video/quicktime" height="303" width="352">
					<embed src="http://amphibious.mit.edu/movies/leanwithit.mov" height="303" width="352" autoplay="false" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/">
				</object>
			</div>
		</div>-->
			
		
        <div class="videowrap">
        <div class="blurb">
        <br><br><br>
					General Interest Form -
					</br>If you are interested in the program and would like to talk to us about the program in general please fill out the form below and we'll get in touch with you soon.
				</div>
				<form id="iaminterested" action="form_process.php" method="post">
					<div id="" class="pagecolumn1">
					<input id="nameinput" type="text" name="theirname" style="margin-top: 0px;" value="Your Name" /> </br>
						<input id="ageinput" type="text" name="age" value="Your Age" /> </br>
						<input id="zipinput" type="text"  name="zipcode" value="Your Zipcode" /> </br>
						<input id="emailinput" type="text"  name="email" value="Your Email"/> </br>
						<input id="schoolinput" type="text"  name="school" value="Your School" /> </br>
						<input type="submit" />
					</div>
					<div id="" class="pagecolumn2">
						<label id="sportlabel" for="sportinput">Your Sports Interests</label>
						<input class="sportinput" type="checkbox" name="sport[]" value="swimming">Swimming</input>
						<br />
						<input class="sportinput" type="checkbox" name="sport[]" value="rowing" />Rowing</input>
						<textarea id="otherinput" resize="none" style="margin-top: 18px;" name="other">Additional Questions or Comments</textarea>
					</div>
				</form>
                </div>
                <?php include("inc/footer.htm") ?>
        </div>
	</div>
</body>
</html>
