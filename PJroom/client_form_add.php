
<?php 

include('h.php');

include('backend/condb.php');
$p_id = $_GET['id'];
?>

      <?php
      $sql = "SELECT * FROM tbl_product as p 
              INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
              WHERE  p_id = $p_id ";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);
      ?>

<form  name="register" action="client_edit.php" method="GET" class="form-horizontal" align="center">
<?php $p_id ; ?>
        <div class="form-group" >
          <div class="col-sm-5" align="center">
            <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="ชื่อ-สกุล " />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="m_room" type="text" readonly required class="form-control" id="m_room" value="<?=$row["p_name"];?>" placeholder="<?php echo $row["p_name"];?>" />
          </div>
        </div>

       
        
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="m_start" type="date" required class="form-control" id="m_start" placeholder="วันที่เข้า " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="m_end" type="date" required class="form-control"  id="m_end" placeholder="วันที่ออก" />
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="m_email" type="email" required  class="form-control" id="m_email"   placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="m_tel" type="text" required  class="form-control" id="m_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="status_id" type="hidden" required class="form-control" id="status_id" value="1" placeholder="<?php echo $row["p_name"];?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input  name="p_id" type="hidden" required class="form-control" id="p_id" value="<?=$row["p_id"];?>" placeholder="<?php echo $row["p_name"];?>" />
          </div>
        </div>
        
      <div class="form-group">
          <div class="col-sm-5" align="center">
          <button type="submit" class="btn btn-success" id="btn"  > <span class="glyphicon glyphicon-ok"></span> ทำรายการต่อ  </button>
          </div>     
      </div>

      
      </form>