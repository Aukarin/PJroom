<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #99FFFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="form_login.php">Login</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">ตรวจสอบการจอง</a>
        </li>
      </ul>
      <form class="d-flex" name="register" action="client_check_id.php" method="GET"  >
        <input  name="Check"class="form-control me-2" placeholder="ใส่เบอร์โทรเพื่อตรวจสอบ" >
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form>
    </div>
  </div>
</nav>
