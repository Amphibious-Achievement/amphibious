<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="SHORTCUT ICON" href="pics/favicon.ico">
	<meta name="robots" content="follow">
	<title>Amphibious Achievement | Join The Program</title>
	<meta name="author" content="Turner Bohlen">
	<script src="js/pageswitchers.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/form_style.css" type="text/css"></link>
	<link rel="stylesheet" href="css/style2.css" type="text/css"></link>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		// first prepare the document on ready
		$(document).ready(function() {
			/*
		 	 * prepare all text inputs
		 	 */
			$("input[type='text']").addClass("idlefield");
			// on focus clear the field and make the text in it black
			$("input[type='text']").focus(function() {
				if (this.value == this.defaultValue) {
					this.value = "";
					$(this).removeClass("idlefield").addClass("focusfield");
				}
			});
			// on blur reset the field if it has not been changed or leave it as is
			$("input[type='text']").blur(function () {
				if(this.value.trim() == "") {
					this.value = this.defaultValue;
					$(this).removeClass("focusfield").addClass("idlefield");
		 		}
			});
			/*
			 * Doing a simiar preparation for the textarea
			 */
			$("#otherinput").addClass("idlefield");
			// on focus clear the field and make the text in it black
			$("#otherinput").focus(function() {
				if (this.value == "Additional Questions or Comments") {
					this.value = "";
					$(this).removeClass("idlefield").addClass("focusfield");
				}
			});
			// on blur reset the field if it has not been changed or leave it as is
			$("#otherinput").blur(function () {
				if(this.value.trim() == "") {
					this.value = "Additional Questions or Comments";
					$(this).removeClass("focusfield").addClass("idlefield");
				}
			});
		});
	</script>
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
	<div id="joinwrap" class="wrap">
		<?php include("inc/nav3.html") ?>
        <img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 781px; top: 100px;"/>
        <div class="pagewrap">
			<div id="joinsub" class="subpage">
				<div class="blurb">
					If you are at all interested in joining Amphibious Achievement, whether as an instructor, coach, mentor, or participant, please let us know by submitting an application!<br><br>
                    
                    For current Coaches, Mentors, and Administrators, please fill out the Amphibious Achievement Re-Application Form by midnight on December 12th <a href="https://docs.google.com/spreadsheet/viewform?formkey=dHNjUGprWThqeWNlQXR0RnhiaTJFSkE6MQ">here</a><br>
                    <br><br>
                    <b> Amphibious Achievement is no longer accepting Participant applications for Fall 2011. Check back here for the release of the Spring 2012 app soon! </b>
					</br>
					</br>
</div>
				<div class="blurb">
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
