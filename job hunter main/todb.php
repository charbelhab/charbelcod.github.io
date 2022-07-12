<?PHP
session_start();
$cn=$_SESSION["companyname"];
$t=$_POST["time"];
$m=$_POST["major"];
$c=$_POST['country'];
$e=$_SESSION["email"];
$s=$_POST["salary"];

$desc=$_POST["desc"];
$do=$_POST["daysoff"];
$lvl=$_POST["level"];
$educ=$_POST['educ0'];
$exp=$_POST['exp0'];

if (isset($_POST['educ2']) && $_POST['educ2']!=""){
   $educ.="//".$_POST['educ2'];
}
if (isset($_POST['educ3'])&& $_POST['educ3']!=""){
   $educ.="//".$_POST['educ3'];
}
if (isset($_POST['educ4'])&& $_POST['educ4']!=""){
   $educ.="//".$_POST['educ4'];
}
if (isset($_POST['educ5'])&& $_POST['educ5']!=""){
   $educ.="//".$_POST['educ5'];
}
if (isset($_POST['educ6'])&& $_POST['educ6']!=""){
   $educ.="//".$_POST['educ6'];
}
if (isset($_POST['educ7'])&& $_POST['educ7']!=""){
   $educ.="//".$_POST['educ7'];
}
if (isset($_POST['educ8'])&& $_POST['educ8']!=""){
   $educ.="//".$_POST['educ8'];
}
$len=($educ);
if ($len >500){
   $educ=substr($educ, 0, 499);
}

if (isset($_POST['exp2']) && $_POST['exp2']!=""){
   $exp.="//".$_POST['exp2'];
}
if (isset($_POST['exp3'])&& $_POST['exp3']!=""){
   $exp.="//".$_POST['exp3'];
}
if (isset($_POST['exp4'])&& $_POST['exp4']!=""){
   $exp.="//".$_POST['exp4'];
}
if (isset($_POST['exp5'])&& $_POST['exp5']!=""){
   $exp.="//".$_POST['exp5'];
}
if (isset($_POST['exp6'])&& $_POST['exp6']!=""){
   $exp.="//".$_POST['exp6'];
}
if (isset($_POST['exp7'])&& $_POST['exp7']!=""){
   $exp.="//".$_POST['exp7'];
}
if (isset($_POST['exp8'])&& $_POST['exp8']!=""){
   $exp.="//".$_POST['exp8'];
}
$len=($exp);
if ($len >500){
   $exp=substr($exp, 0, 499);
}

// 
// 
//bade a3mil eza 3emil post la job mawjoud yaamil hide lal adim w ynazzil l jdid
// 
// 




/*$t=time();
echo(date("Y-m-d",$t));*/
$desc=strtolower($desc);
// \"$cn\"
$globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));

$r=mysqli_query($globals["conn"], "SELECT entnum from entreprise Where email='$e' ");
$row = mysqli_fetch_array($r);
$a=$row[0];
$job0=mysqli_query($globals["conn"], "SELECT major_id,entnum,country_id,level from job Where entnum='$a' and major_id='$m' and country_id='$c' and level='$lvl'");
 while ($row0 = mysqli_fetch_array($job0)){
 $a0=$row0[0];
 $s0=$row0[1];
 $c0=$row0[2];
 $l0=$row0[3];
 }
 if ($m==$a0 && $a==$s0 && $c==$c0 && $lvl==$l0){
    mysqli_query($globals["conn"], "UPDATE job SET showhide = 'hide' WHERE entnum='$a' AND major_id = '$m' and country_id='$c' and level='$l0'") or die (mysqli_error($globals["conn"]));
 }

mysqli_query($globals["conn"], "INSERT INTO job 
(entnum,level,time,major_id,attention,experience,daysoff,salary,country_id,education) VALUES ('$a','$lvl','$t','$m',\"$desc\",\"$exp\",'$do','$s','$c',\"$educ\")")
 or die (mysqli_error($globals["conn"]));
 
 header("Location:inndex.php");

?>


