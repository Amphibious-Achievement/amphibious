<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
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
	<script type="text/javascript">

		$(document).ready(function() {
				/*
			 	 * prepare all biophotos so that when you click on them or mouse over
			 	 * you get the desired effect.
			 	 */
				$(".categorypic").hover(function() {
					$(this).addClass("activecategorypic");
				},
				function() {
					$(this).removeClass("activecategorypic");
				});
				$(".categorypic").click(function () {
					openGallery($(this).attr("id"));
				});
			});

		function openGallery(word) {
			if(word == "row") {
				jQuery.slimbox([['pics/row1.png', 'Rowing 1'], ['pics/row2.png', 'Rowing 2'],
					['pics/row3.png', 'Rowing 3'], ['pics/row4.png', 'Rowing 4'],
					['pics/row5.png', 'Rowing 5'], ['pics/row6.png', 'Rowing 6']], 0);
			}
			else if(word == "swim") {
				jQuery.slimbox([['pics/swim1.png', 'Swimming 1'], ['pics/swim2.png', 'Swimming 2'],
					['pics/swim3.png', 'Swimming 3'], ['pics/swim4.png', 'Swimming 4'],
					['pics/swim5.png', 'Swimming 5'], ['pics/swim6.png', 'Swimming 6'],
					['pics/swim7.png', 'Swimming 7'], ['pics/swim8.png', 'Swimming 8'],
					['pics/swim9.png', 'Swimming 9'], ['pics/swim10.png', 'Swimming 10']], 0);
			} 
			else if(word == "tutor") {
				jQuery.slimbox([['pics/tutor1.png', 'Tutoring 1'], ['pics/tutor2.png', 'Tutoring 2'],
					['pics/tutor3.png', 'Tutoring 3'], ['pics/tutor4.png', 'Tutoring 4'],
					['pics/tutor5.png', 'Tutoring 5'], ['pics/tutor6.png', 'Tutoring 6'],
					['pics/tutor7.png', 'Tutoring 7'], ['pics/tutor8.png', 'Tutoring 8'],
					['pics/tutor9.png', 'Tutoring 9'], ['pics/tutor10.png', 'Tutoring 10'],
					['pics/tutor11.png', 'Tutoring 11'], ['pics/tutor12.png', 'Tutoring 12'],
					['pics/tutor13.png', 'Tutoring 13'], ['pics/tutor14.png', 'Tutoring 14']], 0);
				}
			else if(word == "ergathon") {
				jQuery.slimbox([['pics/ergathon1.png', 'Erg-A-Thon 1'], ['pics/ergathon2.png', 'Erg-A-Thon 2'],
					['pics/ergathon3.png', 'Erg-A-Thon 3'], ['pics/ergathon4.png', 'Erg-A-Thon 4'],
					['pics/ergathon5.png', 'Erg-A-Thon 5']], 0);
				}
		}
	</script>
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
        <img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 653px; top: 100px;" />
        <div class="pagewrap">
	        <div id="categorywrap">
	            <div class="categorycolumn">
	                <img id="row" class="categorypic" src="/pics/row_front.png" alt="Rowing" />
					<div class="categorylabel">
					Rowing
					</div>
	            </div>
	            <div class="categorycolumn">
	                <img id="swim" class="categorypic" src="/pics/swim_front.png" alt="Swimming"/>
	            	<div class="categorylabel">
					Swimming
					</div>
	            </div>
	            <div class="categorycolumn">
	                <img id="tutor" class="categorypic" src="/pics/tutor_front.png" alt="Tutoring" />
	            	<div class="categorylabel">
					Tutoring
					</div>
	            </div>
	        </div>
            <div id="categorywrap">
	            <div class="categorycolumn2"><img id="ergathon" class="categorypic" src="/pics/ergathon_front.PNG" alt="Erg-A-Thon"/>
	            	<div class="categorylabel">
					Erg-A-Thon
					</div>
	            </div>
          </div>
		  <?php include("inc/footer.htm") ?>
		</div>
	</div>
</body>
</html>
