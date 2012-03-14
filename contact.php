<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="SHORTCUT ICON" href="pics/favicon.ico">
	<meta name="robots" content="follow">
	<title>Amphibious Achievement | Contact Us</title>
	<meta name="author" content="Turner Bohlen">
	<script src="js/pageswitchers.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/style2.css" type="text/css"></link>
	<link rel="stylesheet" href="css/form_style.css" type="text/css"></link>
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
			$("#messageinput").addClass("idlefield");
			// on focus clear the field and make the text in it black
			$("#messageinput").focus(function() {
				if (this.value == "Your Message") {
					this.value = "";
					$(this).removeClass("idlefield").addClass("focusfield");
				}
			});
			// on blur reset the field if it has not been changed or leave it as is
			$("#messageinput").blur(function () {
				if(this.value.trim() == "") {
					this.value = "Your Message";
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
<body onLoad="setPage('contact');">
	<div id="contactwrap" class="wrap">
		<?php include("inc/nav3.html") ?>
		<img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 799px; top: 100px;"/>
		<div class="pagewrap">
			<div id="contactsub" class="subpage">
				<div class="blurb">
				If you have any questions, comments, or suggestions drop us a message by filling out the form below.
				</div>
				<form id="emailform" action="email_process.php" method="post">
					<div class="pagecolumn1">
						<input id="nameinput" type="text" style="margin-top: 0px;" name="theirname" value="Your Name" /> </br>
						<input id="emailinput" type="text" name="email" value="Your Email"/> </br>
						<input id="subjectinput" type="text" name="subject" value="Messge Subject"/> </br>
						<input type="submit" />
					</div>
					<div class="pagecolumn2">
						<textarea id="messageinput" resize="none" name="message">Your Message</textarea> </br>
					</div>
				</form>
			</div>
			<?php include("inc/footer.htm") ?>
		</div>
	</div>
</body>
</html>