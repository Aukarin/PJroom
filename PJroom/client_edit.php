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
include('backend/condb.php');
$m_name = $_REQUEST["m_name"];
$m_email = $_REQUEST["m_email"];
$m_tel = $_REQUEST["m_tel"];
$m_room = $_REQUEST["m_room"];
$m_start = $_REQUEST["m_start"];
$m_end = $_REQUEST["m_end"];

$status_id =  $_REQUEST["status_id"];
  
$p_id =  $_REQUEST["p_id"];
$query = "SELECT * FROM tbl_product WHERE p_id = $p_id ORDER BY p_id ASC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
?>
<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
}
 
td, th {
    text-align: left;
    padding: 8px;
}
 
tr:nth-child(even) {
    background-color: #dddddd;
}

input[type=button]{
  background-color: #FFCC66;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 160px;
}
button[type=submit]{
  background-color: #33CC99;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 160px;
}

</style>

<form  name="register" action="client_form_add_db.php" method="POST" class="form-horizontal">
<input type="hidden" name="member_id" value="<?php echo $member_id; ?>" >
        <table   class="table" align=center border=1  width="500" hight="150">
        
        <tr align=center>
        <th >
                <?php echo  "ชื่อขนามสกุล" ;?> 
        </th>
        <td >
                <?php echo  $m_name ;?> 
        </td>
        </tr>
        <tr align=center> 
        <th >
                <?php echo  "ห้อง" ;?> 
        </th>
        <td >
                <?php echo   $m_room ;?> 
        </td>
        </tr>
       
        <tr align=center>
        <th >
                <?php echo  "เช็คอิน" ;?> 
        </th>
        <td >
                <?php echo   $m_start ;?> 
        </td>
        </tr>
        <tr align=center>
        <th >
                <?php echo  "เช็คเอาต์" ;?> 
        </th>
        <td >
                <?php echo   $m_end ;?> 
        </td>
        </tr>
        <tr align=center>
        <th >
                <?php echo  "อีเมล" ;?> 
        </th>
        <td >
                <?php echo   $m_email ;?> 
        </td>
        </tr>
        <tr align=center>
        <th >
                <?php echo  "เบอร์ติดต่อ" ;?> 
        </th>
        <td >
                <?php echo   $m_tel ;?> 
        </td>
        </tr>
        <tr align=center>
        <th >
        
                <?php 
                $day=((strtotime($m_end) - strtotime($m_start))/  ( 60 * 60 * 24 ));
                
                echo  "ราคารวม " .$day ." คืน " ;
                
                
                ?> 
        </th>
        <td >
        <?php 	foreach ($result as $row_pro )  { 
          if($row_pro['p_id']== $p_id){

            $total=((strtotime($m_end) - strtotime($m_start))/  ( 60 * 60 * 24 ))*($row_pro['p_detail']);
          }
        }
          ?>
          

                <?php  echo $total;  // 1 day = 60*60*24 echo   $m_tel ;?> 
        
                <?php ?>
        </td>
        </tr>
        <tr align=center>
        <th >
                <?php echo  "กรอกบัตรเครดิต" ;?> 
        </th>
        <td >
        <img src="g.png" width="180 "  class="img-fluid" alt="Responsive image">
               <div class="form-group">
               <?php echo  "ชื่อบนบัตร" ;?> 
          <div class="col-sm-5" align="left">
            <input  name="name" type="text" required  class="form-control" value=""  placeholder="" />
          </div>
        </div>
               <?php echo  "หมายเลขบัตรเครดิต/เดบิต" ;?> 
          <div class="col-sm-5" align="left">
            <input  name="idcard" type="text" maxlength="16" required  minlength="16" class="form-control"  value=""  placeholder="" />
          </div>
          <?php echo  "วันหมดอายุ" ;?> 
          <div class="col-sm-5" align="left">
            <input  name="exe" type="text" maxlength="5" required  minlength="5" class="form-control"  value=""  placeholder="ดด/ปป" />
          </div>
          <?php echo  "รหัส cvc/cvv" ;?> 
          <div class="col-sm-5" align="left">
            <input  name="id" type="text" maxlength="3" required  minlength="3" class="form-control"  value=""  placeholder="" />
          </div>
        </div>
        </td>
        </tr>
        </table>
       
        


        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_name" type="hidden" required class="form-control" id="m_name"  value="<?=$m_name;?>" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
          <input  name="m_room" type="hidden" required class="form-control" id="m_room" placeholder="ห้อง" value="<?=$m_room;?>" /> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
          <input  name="m_start" type="hidden" required class="form-control" id="m_start" placeholder="วันที่เข้า" value="<?=$m_start;?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_end" type="hidden" required class="form-control" id="m_end" placeholder="วันที่ออก" value="<?=$m_end;?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_email" type="hidden" class="form-control" id="m_email"  value="<?=$m_email;?>"  placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_tel" type="hidden" class="form-control" id="m_tel" value="<?=$m_tel;?>"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="status_id" type="hidden" required class="form-control" id="status_id" value="1" placeholder="<?php echo $row["p_name"];?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="p_id" type="hidden" required class="form-control" id="p_id" value="<?=$_REQUEST["p_id"];?>" placeholder="<?php echo $row["p_name"];?>" />
          </div>
        </div>


        <table   class="table" align=center border=0  width="500" hight="150">
        <tr align=center>
        <th >
        <form >
        <div class="form-group">
          <div class="col-sm-5" align="left">
        <input type=button background-color: #4CAF50; onClick="window.history.back(-1)" value="แก้ไข">
        </div>     
      </div>
        </form>
        </th >
        <?php
        

        if($day < 1){
          echo "<br></br>";
          echo "<center>";
          echo "<font color=\"red\">กรุณาตรวจสอบวันที่เช็คอิน-เช็คเอาต์อีกครั้งค่ะ </font>";
          echo "</center>";
        }
        else{

        
        ?>
        <th >
        


          <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id=3 ><span class="glyphicon glyphicon-ok"></span> จองและจายทันที  </button>
          </div>     
      </div>

      <?php } ?>


      </th >
      </tr>



        
      
      </table>
      
      </form>
      
    
</body>
</html>