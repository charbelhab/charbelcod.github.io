
<?PHP
$n=$_POST["first_name"];
$e=$_POST["your_email"];
$cn=$_POST['compnum'];
$p=$_POST["comfirm_password"];

$n=strtolower($n);
session_start();
$_SESSION["name"]=$n;




$globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") ;

$filename = $_FILES["fileToUpload"]["name"]; 

$tempname = $_FILES["fileToUpload"]["tmp_name"];

$folder = "image/".$filename; 



if (move_uploaded_file($tempname, $folder))  { 

$msg = "Image uploaded successfully"; 

}else{ 

$msg = "Failed";
}
$_SESSION["dbcomp"]=true;
mysqli_query($globals["conn"], "INSERT INTO entreprise 
(name,number,email,password,logo) VALUES (\"$n\",'$cn','$e','$p',\"$filename\")")
 or $_SESSION["dbcomp"]=false;
 if ($_SESSION["dbcomp"]==true){
    $_SESSION["login"]=true;
    $_SESSION["tag"]='c';
    $_SESSION["companyname"]=$n;
    $_SESSION['email']=$e;
                                     
   
    header("Location:inndex.php");
   }
   else{
      header("Location:compsign.php");
   }

?>