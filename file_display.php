<?php

	$conn = mysql_connect('localhost','root','','trialproject');

 // just so we know it is broken
 error_reporting(E_ALL);
 // some basic sanity checks
 if(isset($_GET['id']) && is_numeric($_GET['id'])) {
     //connect to the db
     $link = mysql_connect("$host", "$user", "$pass")
     or die("Could not connect: " . mysql_error());

     // select our database
     mysql_select_db("$db") or die(mysql_error());

     // get the image from the db
     //$sql = "SELECT image FROM test_image WHERE id=" .$_GET['id'] . //";";7
$sql = "SELECT image FROM images";

     // the result of the query
     $result = mysql_query("$sql");
	 while ($row=mysql_fetch_array($result))
	//echo  "<img src="$row['image']>";
echo $row['image'];
     // set the header for the image
     header("Content-type: image/jpeg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
 }
 else {
     echo 'Please use a real id number';
 }
?>
