<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('h.php');
include('backend/condb.php');

include('navbar.php');

$Check = $_REQUEST["Check"];
$query = "SELECT * FROM tbl_member ORDER BY member_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                echo ' <table class="table table-hover">';
                //หัวข้อตาราง 
                  echo "
                    <tr bgcolor = #F5DEB3>
                    <td>id</td>
                  
                    <td>m_name</td>
                    <td>m_room</td>
                    <td>m_tel</td>
                    <td>เวลาเข้า</td>
                    <td>เวลาออก</td>
                    <td>m_email</td>
                    
                                   
                  </tr>";
                  echo "<tr>";
                  $ch=true;
                	foreach ($result as $row_pro )  { 
                   
                        if($Check == $row_pro['m_tel']){
                            
                            echo "<td>" .$row_pro["member_id"] .  "</td> ";
                          
                            echo "<td>" .$row_pro["m_name"] .  "</td> ";
                            echo "<td>" .$row_pro["m_room"] .  "</td> ";
                            echo "<td>" .$row_pro["m_tel"] .  "</td> ";
                            echo "<td>" .$row_pro["m_start"] .  "</td> ";
                             echo "<td>" .$row_pro["m_end"] .  "</td> ";
                             echo "<td>" .$row_pro["m_email"] .  "</td> ";
                             $ch=false;
                              
                            

                        }
                        
                        echo "</tr>";
                       
                      
                    
              

                    }
                    
                    echo "</table>";
                    
                    echo " <center>";
                   
                    
                    if($ch == true) {
                      
                    
                      echo "<font color=\"red\"> ไม่มีรายชื่อนี้อยู่ในระบบ </font>" ;
                    }
                  
                    echo " </center>";


                    mysqli_close($con);
    ?>
</body>
</html>