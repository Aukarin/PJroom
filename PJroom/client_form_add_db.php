<?php

include('backend/condb.php');//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
 
  $m_name = $_REQUEST["m_name"];
  $m_email = $_REQUEST["m_email"];
  $m_tel = $_REQUEST["m_tel"];
  $m_room = $_REQUEST["m_room"];
  $m_start = $_REQUEST["m_start"];
  $m_end = $_REQUEST["m_end"];

  $status_id =  $_REQUEST["status_id"];
  
  $p_id =  $_REQUEST["p_id"];
  
  //เพิ่มเข้าไปในฐานข้อมูล
  $sql = "UPDATE tbl_product SET  
    status_id='$status_id'
  WHERE p_id='$p_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
//ปิดการเชื่อมต่อ database
mysqli_close($con);
include('backend/condb.php');
$m_name = $_REQUEST["m_name"];
$m_email = $_REQUEST["m_email"];
$m_tel = $_REQUEST["m_tel"];
$m_room = $_REQUEST["m_room"];
$m_start = $_REQUEST["m_start"];
$m_end = $_REQUEST["m_end"];
  $sql = "INSERT INTO tbl_member( m_name, m_email, m_tel, m_room,m_end,m_start)
       VALUES( '$m_name', '$m_email', '$m_tel', '$m_room','$m_end','$m_start')";

  
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
    /*

    include('backend/condb.php');
   
    $sql = "SELECT RECORD_TIME, member_id
FROM tbl_member
WHERE RECORD_TIME = (SELECT MAX(RECORD_TIME) FROM tbl_member WHERE member_id = 'member_id')"


    */
 //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง:

?>

<?php



  echo "<script type='text/javascript'>";
  echo "alert('Update Succesfuly');";
  echo "window.location = 'index.php' ";

  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>
 