<?php

	//$conn=mysqli_connect( "localhost", "root", "", "" ) or die("Could not connect: " .mysqli_error($conn) );
	$conn = mysqli_connect("localhost","root","","trialproject");

 	$getImage = mysqli_query($conn,"SELECT image FROM images");
		header("Content-type: image/jpg");
$row=mysqli_fetch_array($getImage);


		echo $row['image'];

echo "<table border=3>";
echo "<tr>";
		echo "<td>";
		echo $row['image'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";
?>

<html>
<head><title>Fetch image form mysql</title>
</head>
<body>




</body>
</html>
