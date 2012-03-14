<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<style type="text/css">
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="SHORTCUT ICON" href="pics/favicon.ico">
	<meta name="robots" content="follow">
	<title>Amphibious Achievement | Photo Gallery</title>
	<meta name="author" content="Turner Bohlen">
	<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/style2.css" type="text/css"></link>
	<link rel="stylesheet" href="css/gallery_style.css" type="text/css"></link>
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
	<div id="gallerywrap" class="wrap">
		<?php include("inc/nav3.html") ?>
        <img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 580px; top: 100px;" />
        <div class="pagewrap">
	        <div id="categorywrap">
            <div id="inthenews">
                    <div class="bulletwrap">
                        <img class="bulletimg" src="/pics/news_sphere.png" alt="News" />
                        <div class="bullettext">In The News</div>
                    </div>
                    <div id="classblurb">
						<?php 
						
						function endswith($string, $test) {
						    $strlen = strlen($string);
						    $testlen = strlen($test);
						    if ($testlen > $strlen) return false;
						    return substr_compare($string, $test, -$testlen) === 0;
						}
						if ($handle = opendir('./content/news/links')) {
						    while (false !== ($entry = readdir($handle))) {
						        if ($entry != "." && $entry != ".." && 	!is_dir($entry) && endswith($entry,".txt")) {
									$link = file_get_contents("./content/news/links/$entry");
									$title = substr($entry,0, strlen($entry)-4);
									$preview = file_get_contents("./content/news/previews/$entry");
									if ($pichandle = opendir('./content/news/pics')) {
									    while (false !== ($picEntry = readdir($pichandle))) {
									        if ($picEntry != "." && $picEntry != ".." && !is_dir($picEntry) && $picEntry == $title . ".jpeg") {
									            $pic = $picEntry;
												break;
									        } else {
												$pic = "no_pic.jpeg";
											}
									    }
									    closedir($pichandle);
									}
									echo "<div class='article'><a href='$link'><span class='articleHolder'><img class='articlePicture' src='content/news/pics/$pic' /></span></a><br/><a class='newslink articleTitle' href='$link' >$title</a> <p class='articlePreview'> $preview ... <a class='newslink' href='$link'>(Read More)</a></p></div>";
						        }
						    }
						    closedir($handle);
						}?>
                    <a href="addnews.php">Add a new article</a>
                    </div>
                    </div>
                    
	            
	        </div>
			<?php include("inc/footer.htm") ?>
		</div>
	</div>
</body>
</html>
