<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<link rel="stylesheet" type="text/css" href="css/style2.css"></link>
    	<link rel="stylesheet" type="text/css" href="css/about_style2.css"></link>
		<link rel="SHORTCUT ICON" href="pics/favicon.ico">
		<meta name="robots" content="follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
        <title>Amphibious Achievement | About Us</title>
		<meta name="generator" content="Studio 3 http://aptana.com/"></meta>
		<meta name="author" content="Turner Bohlen"></meta>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/pageswitchers.js" type="text/javascript"></script>
		<script type="text/javascript">
			// variable to track which bio is open
			var currentBio = null;

			/*
			 * Display or hide a given bio.
			 * This is used when a bio photo is clicked
			 */
			function showBio(pic) {
				pic = $(pic);
				var person = pic.attr("alt");
				var DOM = pic.parent();
				var otherBios = $(".bio", DOM.parent());
				// check to see if this bio is already open using currentBio
				if(person == currentBio) {
					// remove the existing bios on the page
					otherBios.hide("fast").remove();
					pic.addClass("inactivebiophoto").removeClass("activebiophoto");
					currentBio = null;
				}
				// if not hide them and show this one
				else {
					// get info for and then display the new bio
					$(".biophoto[alt='" + otherBios.attr("id") + "']").addClass("inactivebiophoto").removeClass("activebiophoto");
					otherBios.hide("fast").remove();
					var newDOM = $("<div id='" + person + "' class='bio'></div>");
					$.ajax("bios/" + person + "_title.txt", {async : false, success : function (data) {
							var title = String(data);
							newDOM.append($("<div class='biotitle' id='" + person + "'>" + title + "</div>"));
						}
					});
					var bio;
					$.ajax("bios/" + person + ".txt", {async : false, success : function (data) {
							var bio = String(data);
							newDOM.append($("<div class='biocontent'>" + bio + "</div>"));
						}
					});
					DOM.after(newDOM);
					newDOM.show("fast");
					pic.addClass("activebiophoto").removeClass("inactivebiophoto");
					// set currentBio to reflect which bio we just opened
					currentBio = person;
				}
			}

			$(document).ready(function() {
				/*
			 	 * prepare all biophotos so that when you click on them or mouse over
			 	 * you get the desired effect.
			 	 */
			 	$(".biophoto").addClass("inactivebiophoto");
				$(".biophoto").hover(function() {
					if($(this).attr("alt") != currentBio) {
						$(this).addClass("activebiophoto").removeClass("inactivebiophoto");
					}
				},
				function() {
					if($(this).attr("alt") != currentBio) {
						$(this).addClass("inactivebiophoto").removeClass("activebiophoto");
					}
				});
				$(".biophoto").click(function () {
					showBio(this);
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
		<div id="aboutwrap" class="wrap">
    		<?php include("inc/nav3.html") ?>
	        <img class="indicator" src="/pics/indicator_minus_shadow.png" alt="Indicator" style="left: 445px; top: 100px;"/>
	        <div class="pagewrap">
				<!--<div class="pagecolumn1">
					<div id="aboutussub" class="subpage">
						<div class="subtitle">Our Philosophy</div>
						<div class="blurb">
						Amphibious Achievement is a young, energetic community service organization attempting to bring all that MIT has to offer to Boston and Cambridge area students. Our students train to row and swim competitively while participating in a comprehensive yet flexible academic tutoring program.
						<br />
						<br />
						Our four core ideals are:
						</div>
						<div class="blurb">
							<div class="romanwrap">
								<div class="roman">I.</div>
								<div class="romantext">To promote success in and out of the water.</div>
							</div>
							<div class="romanwrap">
								<div class="roman">II.</div>
								<div class="romantext">To enhance learning through advanced resources, competitions, incentives, and fun.</div>
							</div>
							<div class="romanwrap">
								<div class="roman">III.</div>
								<div class="romantext">To accelerate success out of the water through career-building workshops.</div>
							</div>
							<div class="romanwrap">
								<div class="roman">IV.</div>
								<div class="romantext">To provide comprehensive mentorship, both personal and professional.</div>
							</div>
						</div>
	    			</div>
	    		</div>
	    		<div class="divider"></div>-->
	    		<div class="pagecolumn2">
		    		<div id="whowearesub" class="subpage">
						<div class="subtitle" style="margin-left: 30px">Our Team</div>
		    			<div id="picrow1" class="picrow">
                            <div class="halfbiospacer"></div>
							<img class="biophoto" src="pics/noam.PNG" alt="Noam" />
							<img class="biophoto" src="pics/ron.PNG" alt="Ron" />
							<img class="biophoto" src="pics/camila.PNG" alt="Camila" />
                            <img class="biophoto" src="pics/kim.PNG" alt="Kim" />
							<img class="biophoto" src="pics/brian.PNG" alt="Brian" />
							<img class="biophoto" src="pics/elina.PNG" alt="Elina" />
                            <img class="biophoto" src="pics/shilpa.PNG" alt="Shilpa" />
							<div class="halfbiospacer"></div>
                             
						</div>
						<div id="picrow2" class="picrow">
                            <div class="halfbiospacer"></div>
                            <img class="biophoto" src="pics/alice.PNG" alt="Alice" />
							<img class="biophoto" src="pics/corinne.PNG" alt="Corinne" />
							<img class="biophoto" src="pics/jane.PNG" alt="Jane" />
							<img class="biophoto" src="pics/scotty.PNG" alt="Scotty" />
							<img class="biophoto" src="pics/lila.PNG" alt="Lila" />
							<img class="biophoto" src="pics/jeff.PNG" alt="Jeff" />
                            <img class="biophoto" src="pics/teri.PNG" alt="Teri" />
							<div class="halfbiospacer"></div>
						</div>
						<div id="picrow3" class="picrow">
							<div class="halfbiospacer"></div>
                            <div class="halfbiospacer"></div>
							<img class="biophoto" src="pics/meghan.PNG" alt="Meghan" />
							<img class="biophoto" src="pics/marcus.PNG" alt="Marcus" />
                            <img class="biophoto" src="pics/nicole.PNG" alt="Nicole" />
							<img class="biophoto" src="pics/kere.PNG" alt="Alex" />
							<img class="biophoto" src="pics/sarah.PNG" alt="Sarah" />
                            <img class="biophoto" src="pics/julia.PNG" alt="Julia" />
							<div class="halfbiospacer"></div>
                            <div class="halfbiospacer"></div>
						</div>
						
					</div>
				</div>
				<?php include("inc/footer.htm") ?>
			</div>
		</div>
    </body>
</html>
