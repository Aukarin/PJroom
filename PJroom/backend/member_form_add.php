<?php include('h.php');?>
<form  name="register" action="member_form_add_db.php" method="POST" class="form-horizontal">
       
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="ชื่อ-สกุล " />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_room" type="text" required class="form-control" id="m_room" placeholder="เลขห้อง " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_start" type="date" required class="form-control" id="m_start" placeholder="วันที่เข้า " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_end" type="date" required class="form-control" id="m_end" placeholder="วันที่ออก" />
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_email" type="email" class="form-control" id="m_email"   placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_tel" type="text" class="form-control" id="m_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div>
      </form>