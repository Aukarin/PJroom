<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$member_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('h.php');?>
<form  name="register" action="member_form_edit_db.php" method="POST" class="form-horizontal">
<input type="hidden" name="member_id" value="<?php echo $member_id; ?>" >
        

        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_name" type="text" required class="form-control" id="m_name"  value="<?=$m_name;?>" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <textarea name="m_room" class="form-control" id="m_room" required><?php echo $m_room; ?></textarea> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
          <input  name="m_start" type="date" required class="form-control" id="m_start" placeholder="วันที่เข้า" value="<?=$m_start;?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_end" type="date" required class="form-control" id="m_end" placeholder="วันที่ออก" value="<?=$m_end;?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_email" type="email" class="form-control" id="m_email"  value="<?=$m_email;?>"  placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_tel" type="text" class="form-control" id="m_tel" value="<?=$m_tel;?>"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        
        
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข  </button>
          </div>     
      </div>
      </form>