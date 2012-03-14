<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<style type="text/css">
	.contactInput {
		height:20px;
		width:200px;
		margin-bottom:10px;
	}
	</style>
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
        <img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 716px; top: 100px;" />
        <div class="pagewrap">
					<div style="margin-bottom:20px;">General Interest Form</div><div style="margin-bottom:20px"> Amphibious Achievement is no longer accepting applications for mentors or students, but if you are interested in the program and would like to talk to us about the program in general please fill out the form below and we'll get in touch with you soon.</div>
				<form id="iaminterested" action="form_process.php" method="post">
					<div style="margin-bottom:20px; width:80%">
						<table>
						<tr>
						<td>
						<input class="contactInput" id="nameinput" type="text" name="theirname" placeholder="Name" />
						<input class="contactInput" id="ageinput" type="text" name="age" placeholder="Age" />
						<input class="contactInput" id="zipinput" type="text"  name="zipcode" placeholder="Zipcode" />
						</td>
						<td>
						<div style="vertical-align:top; margin-top:0px; padding-top:0px background:black">
						<textarea id="otherinput" style="width:600px; height:100px;" name="other" placeholder="Additional Questions or Comments"></textarea></div>
						</td>
						</tr>
						<tr>
						<td>
							<input class="contactInput" id="emailinput" type="text"  name="email" placeholder="Email"/>
							<input class="contactInput" id="schoolinput" type="text"  name="school" placeholder="School" />
						</td>
						</tr>
						</table>
					</div>
					
					<div style="margin-bottom:20px; width:80%">
						<input class="sportinput" type="checkbox" name="sport[]" placeholder="swimming">Swimming</input>
						<input class="sportinput" type="checkbox" name="sport[]" placeholder="rowing" />Rowing</input>
						</div>
						<input type="submit" />
				</form>
                </div>
                <?php include("inc/footer.htm") ?>
        </div>
	</div>
</body>
</html>
