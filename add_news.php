<?php
	// Set the reciever and the subject
	$title = $_POST["title"];
	$link = $_POST["link"];
	$preview = $_POST["preview"];
	file_put_contents("content/news/links/". $title . ".txt",$link);
	file_put_contents("content/news/previews/". $title . ".txt",$preview);
	if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 2000000))
	  {
	  if ($_FILES["file"]["error"] > 0)
	    {
	    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	    }
	  else
	    {
	    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	    echo "Type: " . $_FILES["file"]["type"] . "<br />";
	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	    if (file_exists("upload/" . $_FILES["file"]["name"]))
	      {
	      echo $_FILES["file"]["name"] . " already exists. ";
	      }
	    else
	      {
	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "content/news/pics/" . $title . ".jpeg");
	      echo "Stored in: " . "content/news/pics/" . $title;
	      }
	    }
	  }
	else
	  {
	  echo "invalid file was submitted.";
	
	  }
	exit();
?>