<?php
	$file = 0;
	$directory = "/secure/apps/";
	$reduced_name = $_POST["theirname"];
	$reduced_name = str_replace(" ", "", $reduced_name);
	$fname = "applications/".$reduced_name.".txt";
	$file = fopen($fname, "x");
	$i = 0;
	while(!$file) {
		// this loop covers the case that two forms are submitted with identical "name" fields
		$fname = "applications/".$reduced_name.strval($i).".txt";
		$file = fopen($fname, "x");
		$i ++;
	}
	$sport_string = "";
	foreach ($_POST["sport"] as $s) {
		$sport_string = $sport_string.$s." ";
	}
	$info = "Submitted: ".date('Y-m-d H:i:s')."\n\nName: ".$_POST["theirname"]."\n\nAge: ".$_POST["age"]."\n\nSport Interests: ".$sport_string."\n\nZip Code: ".$_POST["zipcode"]."\n\nEmail: ".$_POST["email"]."\n\nSchool: ".$_POST["school"]."\n\nOther: ".$_POST["other"];	
	fwrite($file, $info);
	
	include("formsubmitted.php");
?>
