<?php
$conn = mysql_connect('localhost','root','','trialproject');
if($_SERVER['REQUEST_METHOD']=='GET') {
    $id = $_GET['id'];

    $con = mysqli_connect('localhost', 'root', '', 'trialproject') or die('Unable To connect');

    //$sql = "SELECT image FROM images WHERE id=$id";
    $sql = "SELECT image FROM images";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    mysqli_close($con);

    header("Content-type: image/jpeg");
    echo $row['image'];
}
