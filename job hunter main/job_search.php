
<?php

session_start();
// echo $_GET["job"];
// echo "<BR />";

// echo  $_GET["rb"];
// echo "<BR />";
// echo  $_GET["level"];
// echo "<BR />";
// echo  $_GET["pricefrom"];
// echo "<BR />"; 
// echo  $_GET["priceto"];
// echo "<BR />";
// echo  $_GET["country"];
// echo "<BR />";
// echo  $_GET["aod"];
//  echo "<BR />"; 
//  echo  $_GET["rnp"];
//  echo "<BR />";

                                            
                                            $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                            mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                           $db=$globals["conn"];
                                           if (isset($_GET['id2'])){
                                               $id2=$_GET['id2'];
                                            $resultcount= mysqli_query($globals['conn'],"SELECT COUNT(entnum) FROM entreprise WHERE major='$id2' and showhide='show'");
                                           
                                           
                                            while ($row = mysqli_fetch_array($resultcount))
                                            {
                                               echo "<span>".$row[0]." jobs found </span>";
                                            }
                                           }
                                           
                                        
                                        //    if (!isset($_SESSION['job']) && !isset($_SESSION['level']) && !isset($_SESSION['time']) && !isset($_SESSION['pf']) && !isset($_SESSION['pt']) && !isset($_SESSION['c']) && !isset($_SESSION['aod']) ){
                                        //      $_SESSION['job']=$_GET["job"];
                                              
  
                                        //      $_SESSION['time']=$_GET["rb"];
                                                  
                                        //      $_SESSION['level']=$_GET["level"];
                                                 
                                        //      $_SESSION['pf']=$_GET["pricefrom"];
                                                  
                                        //      $_SESSION['pt']=$_GET["priceto"];
                                                 
                                        //      $_SESSION['c']=$_GET["country"];
                                                 
                                        //      $_SESSION['aod']=$_GET["aod"];
                                        //      }
                                                  
                                        
                                             
                                        //           if (isset($_SESSION['job']) && $_SESSION['job']!=$_GET["job"]){
                                        //           $_SESSION['job']=$_GET["job"];
                                        //           }
                                        //           else if (!isset($_SESSION['job'])){
                                        //           $_SESSION['job']=$_GET["job"];
                                        //           }
                                                   



                                        //           if (isset($_SESSION['time']) && $_SESSION['time']!=$_GET["rb"]){
                                        //           $_SESSION['time']=$_GET["rb"];
                                        //           }else if (!isset($_SESSION['time'])){
                                        //                $_SESSION['time']=$_GET["rb"];
                                        //                }




                                        //           if (isset($_SESSION['level']) && $_SESSION['level']!=$_GET["level"]){
                                                       
                                        //           $_SESSION['level']=$_GET["level"];
                                        //           }else if (!isset($_SESSION['level'])){
                                        //                $_SESSION['level']=$_GET["level"];
                                        //                }




                                        //           if (isset($_SESSION['pf']) && $_SESSION['pf']!=$_GET["pricefrom"]){     
                                        //           $_SESSION['pf']=$_GET["pricefrom"];}else if (!isset($_SESSION['pf'])){
                                        //                $_SESSION['pf']=$_GET["pricefrom"];
                                        //                }




                                        //           if (isset($_SESSION['pt']) && $_SESSION['pt']!=$_GET["priceto"]){
                                                       
                                        //           $_SESSION['pt']=$_GET["priceto"];}else if (!isset($_SESSION['pt'])){
                                        //                $_SESSION['pt']=$_GET["priceto"];
                                        //                }





                                        //           if (isset($_SESSION['c']) && $_SESSION['c']!=$_GET["country"]){
                                        //           $_SESSION['c']=$_GET["country"];}else if (!isset($_SESSION['c'])){
                                        //                $_SESSION['c']=$_GET["country"];
                                        //                }




                                        //           if (isset($_SESSION['aod']) && $_SESSION['aod']!=$_GET["aod"]){
                                        //           $_SESSION['aod']=$_GET["aod"];}  else if (!isset($_SESSION['aod'])){
                                        //                $_SESSION['aod']=$_GET["aod"];
                                        //                }
                                             
                                   
                                        // $_SESSION['job']=$_GET["job"];
                                              
  
                                        // $_SESSION['time']=$_GET["rb"];
                                             
                                        // $_SESSION['level']=$_GET["level"];
                                            
                                        // $_SESSION['pf']=$_GET["pricefrom"];
                                             
                                        // $_SESSION['pt']=$_GET["priceto"];
                                            
                                        // $_SESSION['c']=$_GET["country"];
                                            
                                        // $_SESSION['aod']=$_GET["aod"];
                                        
                                             
                                   
                                        
                              
                                   
                                     
                                        //   $job=$_SESSION['job'];
                                        //   $time=$_SESSION['time'];
                                        //   $level= $_SESSION['level'];
                                        //   $pf=$_SESSION['pf'];
                                        //   $pt=$_SESSION['pt'];
                                        //   $c=$_SESSION['c'];
                                        //   $aod= $_SESSION["aod"];
                                          
                                        
                                             
                                            
                                               
                                             
                                                
                                                
                                           $job=$_GET["job"];
                                            

                                            $time=$_GET["rb"];
                                                
                                            $level=$_GET["level"];
                                                
                                            $pf=$_GET["pricefrom"];
                                                
                                            $pt=$_GET["priceto"];
                                                
                                            $c=$_GET["country"];
                                            $aod = $_GET["ASCorDESC"];
                                           
                                            $rnp =  $_GET["rnp"];
                                           
                                            
                                      
                                     
                                     
                                      $a = "SELECT count(entnum) FROM job WHERE job.major_id='$job' and job.time='$time' AND job.level='$level'and job.showhide='show' and job.salary >= '$pf' and job.salary <= '$pt' and job.country_id = '$c' ";
                                                
                                                
                                                 if ( $time=="any" && $level=="any"){
                                                 $a="SELECT COUNT(entnum) FROM job WHERE job.salary >= '$pf' and job.major_id='$job' and job.salary <= '$pt'and job.showhide='show' and job.country_id = '$c' ";
                                                }
                                               
                                                else if ($level=="any" ){
                                                 $a="SELECT COUNT(entnum) FROM job WHERE job.salary >= '$pf' and job.major_id='$job' and job.time='$time'and job.showhide='show' and job.salary <= '$pt' and job.country_id = '$c'";
                                                }
                                                else if ( $time=="any"){
                                                 $a= "SELECT COUNT(entnum) FROM job WHERE job.salary >= '$pf' and  job.major_id='$job' AND job.level='$level'and job.showhide='show' and job.salary <= '$pt' and job.country_id = '$c'";
                                                }
                                               
                                                 if (!isset($SESSION['a'])){
                                                     $SESSION['a']=$a;
                                                     $aa=$SESSION['a'];
                                                 }
                                                 else{
                                                    $aa=$SESSION['a'];
                                                 }
                                                 $resultcount= mysqli_query($db,$aa);
                                                 while ($row = mysqli_fetch_array($resultcount))
                                                 {
                                                    echo "<span>".$row[0]." jobs found </span>";
                                                 }
                                                
                                            
                                       
                                        
                                        
                                         
                                  
                                                $limit = $rnp  ;
                                                
                                          
                                                
                                                    if (isset($_GET["page"])) {
                                                        $page  = $_GET["page"]; 
                                                        } 
                                                        else{ 
                                                        $page=1;
                                                        };  
                                                 
                                                $start_from=$_GET['st'];

                                       
                                     
                                               
                                      

                                      $a = "SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary,job.job_code,entreprise.logo   FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id) WHERE job.salary >= '$pf'and job.major_id='$job'and job.showhide='show' and job.salary <= '$pt' and job.country_id = '$c'  AND job.level='$level' and job.time='$time' ORDER BY job_code $aod LIMIT $start_from, $limit  ";
                                      $result_db = mysqli_query($db,"SELECT count(entnum) FROM job WHERE major_id='$job' and time='$time' AND level='$level'and showhide='show' and salary >= '$pf' and salary <= '$pt' and country_id = '$c'"); 
                                     
                                      if ( $time=="any" && $level=="any"){
                                       $a="SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary,job.job_code,entreprise.logo   FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) WHERE job.salary >= '$pf'and job.major_id='$job'and job.showhide='show' and job.salary <= '$pt' and job.country_id = '$c'  ORDER BY job_code $aod LIMIT $start_from, $limit ";
                                       $result_db = mysqli_query($db,"SELECT count(entnum) FROM job WHERE salary >= '$pf'and major_id='$job'and showhide='show' and salary <= '$pt' and country_id = '$c'"); 
                                      }
                                     
                                      else if ($level=="any" ){
                                       $a="SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary,job.job_code,entreprise.logo   FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) WHERE job.salary >= '$pf' and job.major_id='$job'and job.showhide='show' and job.time='$time' and job.salary <= '$pt' and job.country_id = '$c' ORDER BY job_code $aod LIMIT $start_from, $limit ";
                                       $result_db = mysqli_query($db,"SELECT  count(entnum) FROM job WHERE salary >= '$pf' and major_id='$job'and showhide='show' and time='$time' and salary <= '$pt' and country_id = '$c'"); 
                                      }
                                      else if ( $time=="any"){
                                       $a= "SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary,job.job_code,entreprise.logo   FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) WHERE job.salary >= '$pf' and  job.major_id='$job'and job.showhide='show' AND job.level='$level' and job.salary <= '$pt' and job.country_id = '$c'  ORDER BY job_code $aod LIMIT $start_from, $limit ";
                                       $result_db = mysqli_query($db,"SELECT  count(entnum) FROM job WHERE salary >= '$pf' and  major_id='$job'and showhide='show' AND level='$level' and salary <= '$pt' and country_id = '$c'"); 
                                      }
                                     
                                       
                                            $result= mysqli_query($db,$a);
                                            echo '<div>';
                                            
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                                
                                                
                                                echo "<div class='single-job-items mb-30' style = 'height: 100px; width: 800px;'>";
                                                echo    "<div class='job-items'>";
                                                echo '<div class="company-img" >
                                            <img src="image/'.$row[11].'" width="90" 
                                            height="90" alt="">
                                        </div>';
                                                echo           "<div class='job-tittle job-tittle2'>";
                                                echo           '<h4>'. $row[0] .'</h4>';
                                                                
                                                echo      '<ul>';
                                                echo          '<li>' .$row[6].'</li>';
                                                echo           '<li><i class="fas fa-map-marker-alt"></i>'.$row[3].'</li>';
                                                echo           '<li>'.$row[9].'$</li>';
                                                echo       '</ul>';
    
                                              
                                                echo   '</div>';
                                                echo'</div>';
                                                echo'<div class="items-link items-link2 f-right">';
                                                
                                                echo"<a><button style='background-color: Transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                cursor:pointer;
                                                overflow: hidden;
                                                color:RGB(125,125,200);' onclick='NewTab(".$row[10].")'>Details</button></a>";
                                              
                                            
                                                   
                                                echo'</div>';
                                                echo'</div>';
                                                
                                            }
                                       
                                             $row_db = mysqli_fetch_row($result_db);  
                                             $total_records = $row_db[0];  
                                             $total_pages = ceil($total_records / $limit); 
                                           
                                             if (isset($_GET['page'])){  
                                                 $so=$_GET['page'];
                                                
                                                 $cont=0;
                                                
                                             }
                                             else{
                                                 $cont=0;
                                               $so=1;
                                             }
                                            
                                            
                                             $so++;
                                            
                                            
    
                                          
                                            
                                             
                                                
                                             echo "<BR /><BR />";   
                                             if ($start_from>0 ){
                                                echo "<BUTTON  style = 'text-align : center;'class='border-btn2' onclick=back()>back</BUTTON>";
                                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                             }
                                            
                                             if ($start_from+$rnp <= $total_records){
                                                echo "<BUTTON  style = 'text-align : center;'class='border-btn2' onclick=nexttt()>next</BUTTON>";
                                                 
                                            //    echo "<div><BUTTON  style = 'text-align : center;'class='border-btn2' onclick=nexttt()>Plus</BUTTON>' </div>";
                                             }
                                            
                                            
                                        

                                       
                                    
                                        
                                            ?>
                                        