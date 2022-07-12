<HTML>
<HEAD>
<script src=
    "https://smtpjs.com/v3/smtp.js">
  </script>
<script type="text/javascript">
    function sendEmail() {
        var ema=document.getElementById("email").value;
    var rand=document.getElementById("rand").value;
    
    
      Email.send({
        Host: "smtp.gmail.com",
        Username: "jobfindeer@gmail.com",
        Password: "Job@Finder10",
        To: ema,
        From: "JobFindeer@gmail.com",
        Subject: "Verification Code",
        Body: "Your Verification Code Is : "+rand
      })
      
        .then(function (message) {
           
            window.location="forget.php";
        });
    
    }
  </script>
</HEAD>


<BODY onload='sendEmail()'>
    
<?PHP
session_start();

$e=$_POST["your_email"];

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
                    if ($e == $row[0]){
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
header("Location:forget.php");
}
else{
    $rand=$_POST['random'];
   
    echo '<input type="hidden" id ="rand" name="random" value="'.$rand.'">';
    echo '<input type="hidden" id ="email" name="random" value="'.$e.'">';
    
}
?>

</BODY>
</HTML>