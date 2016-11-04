<?php

	//$conn=mysqli_connect( "localhost", "root", "", "" ) or die("Could not connect: " .mysqli_error($conn) );
	$conn = mysqli_connect("localhost","root","","trialproject");

 	$getImage = mysqli_query($conn,"SELECT image FROM images");
  while ($row=mysqli_fetch_array($getImage)){
		header("Content-type: image/jpg");
	  echo $row['image'];
}
?>

<!--html>
<head><title>Fetch image form mysql</title>
</head>
<body>




</body>
</html-->
