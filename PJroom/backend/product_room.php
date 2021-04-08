<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<?php include('h.php');
include('condb.php'); 
    
    $query = "
    SELECT * FROM tbl_product as p 
    INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
    ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
    $result = mysqli_query($con, $query);
    $num0=0;
    $num1=0;
    
    foreach ($result as $row_pro )  { 
    
        if($row_pro['status_id']==0)
        {
            $num0+=1;
        }else{
            $num1+=1;
        }
    
    
    }
    $room=$num0+$num1;
    ?>

</head>
<body>
<div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('menu_left.php');
        
        ?>
        <!-- Content Wrapper. Contains page content -->
      </div>
      <div class="col-md-6">
      
      
      <?php
  

                echo  ' <table class="table table-hover">';
//หัวข้อตาราง
                echo "<tr align=center bgcolor = #F5DEB3>
                <td width='25%'>ห้องทั้งหมด</td>
                        <td width='25%'>ห้องว่าง</td>
                        <td width=25%>ห้องเต็ม</td>
                        </tr>";
                     echo "<tr align=center>";
                     echo "<td>" .$room .  "</td> ";
                     echo "<td>" .$num0 .  "</td> ";
                     echo "<td>" .$num1 .  "</td> ";
                     echo "</tr>";

            echo  ' </table >';
               
        
?>
     



      </div>
    </div>
  </div>
    
</body>
</html>