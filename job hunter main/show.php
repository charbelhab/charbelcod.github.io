<?php
// bade zid condition aal where
//bade a3mil eza 3emil post la job mawjoud yaamil hide lal adim w ynazzil l jdid
session_start();
$globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));

$sh=$_POST['show'];
$e=$_SESSION["email"];
$l=$_POST['level'];
$c=$_POST['country'];
$m=$_POST['major'];
$r=mysqli_query($globals["conn"], "SELECT entnum from entreprise Where email='$e' ");
$row = mysqli_fetch_array($r);
$e=$row[0];
$sql=mysqli_query($globals["conn"], "UPDATE job SET showhide = '$sh' WHERE entnum='$e' AND major_id = '$m' and country_id = $c and level='$l' ") or die (mysqli_error($globals["conn"]));

header("Location:comprofile.php");
?>