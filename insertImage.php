<?php
$conn = mysql_connect('localhost','root','','trialproject');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','trialproject') or die('Unable To connect');
    $sql = "insert into images (image) values(?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        header('Location:  index.php?success');

    }else{

        header('Location:  index.php?failure');
    }
    mysqli_close($con);
}else{
    header('Location: index.php');
}
