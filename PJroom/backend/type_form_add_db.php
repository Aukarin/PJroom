<?php
include('condb.php');

$type_name = $_POST['type_name'];
$t_detail = $_POST['t_detail'];

$sql ="INSERT INTO tbl_type
    
    (type_name,t_detail) 
    

    VALUES 

    ('$type_name','t_detail')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('สำเร็จ');";
      echo "window.location ='type.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='type.php'; ";
      echo "</script>";
    }
?>