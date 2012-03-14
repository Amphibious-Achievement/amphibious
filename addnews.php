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
		<img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 580px; top: 100px;" />
		<div class="pagewrap">
				Add a news article by submitting this form!
				<form id="newarticle" action="add_news.php" method="post" enctype="multipart/form-data">
					<div>
						<input type="text" id="title" name="title" placeholder="Title" />
						<input type="text" id="link" name="link" placeholder="Link"/> </br>
						<textarea type="text" id="preview" name="preview" placeholder="This is a preview of the article which I'd like to post to the press page."></textarea> <br />
						<input type="file" name="file" id="file" />
						<input type="submit" />
					</div>
				</form>
			<?php include("inc/footer.htm") ?>
		</div>
	</div>
</body>
</html>