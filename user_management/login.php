<div class="colorP">
  <?php include 'inc/header.php'; ?>
</div>
<?php
Session::CheckLogin();
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
   $userLog = $users->userLoginAuthotication($_POST);
}
if (isset($userLog)) {
  echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
  echo $logout;
}


 ?>

 <style media="screen">
 .colorP{
   width: 1000px;
 }
   .cart{
     border-radius: 15px;
   }
   .colorL{
     background: linear-gradient(195deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
     padding: 10px;
     border-radius: 15px;
     margin: 10px;
   }
   .btn-success{
    background: linear-gradient(45deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
    border-radius: 15px;
    width: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
       font-weight: 800;
   }
 </style>
<div class="colorL">
<div class="card ">
  <div class="card-header">
          <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>User login</h3>
        </div>
        <div class="card-body">


            <div style="width:450px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-success">Login</button>
                </div>


            </form>
          </div>


        </div>
      </div>

</div>

  <?php
  // include 'inc/footer.php';

  ?>
