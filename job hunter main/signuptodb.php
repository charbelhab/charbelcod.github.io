<?PHP
$n=$_POST["first_name"]." ". $_POST["last_name"];
$e=$_POST["your_email"];
$p=$_POST["comfirm_password"];


$n=strtolower($n);
session_start();
$_SESSION["name"]=$n;

$globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));

$_SESSION["db"]=true;
mysqli_query($globals["conn"], "INSERT INTO signup 
(name,email,password) VALUES (\"$n\",'$e','$p')")
 or  $_SESSION["db"]=false ;
 if ($_SESSION["db"]==true){
    $_SESSION["login"]=true;
    $_SESSION['tag']='u';
    header("Location:inndex.php");
 }
 
 else{
   header("Location:signup.php");
}
?>