<?PHP
session_start();

$e=$_POST["your_email"];
$p=$_POST["password"];
$_SESSION["exist"]=false;
$_SESSION["login"]=false;
$globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
if ($_POST['tag']=='u'){
$result= mysqli_query($globals['conn'],"SELECT  email,password,name FROM signup ");

}
else{
    $result= mysqli_query($globals['conn'],"SELECT  email,password,name FROM entreprise ");
}
while ($row = mysqli_fetch_array($result))
{
                    if ($e == $row[0] && $p == $row[1]){
                        $_SESSION["tag"]= $_POST['tag'];
                        $_SESSION['email']=$row[0];
                        $_SESSION["name"]=$row[2];
                        if ($_SESSION["tag"]=='c'){
                        $_SESSION["companyname"]=$row[2];
                        }
                        $_SESSION["exist"]=true;
                        $_SESSION["login"]=true;
                        
                    }                       
                                            
}

if ($_SESSION["exist"]==false){
header("Location:login.php");
}
else{
    header("Location:inndex.php");
}
?>