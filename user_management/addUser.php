<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewUserByAdmin($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>
<style media="screen">
  .colorA{
    background: linear-gradient(195deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
    padding: 10px;
    border-radius: 15px;
    margin: 10px;
  }
  .btn-primary{
   background: linear-gradient(45deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
   border-radius: 15px;
   width: 200px;
   display: flex;
   justify-content: center;
   align-items: center;
      font-weight: 800;
      margin-left: 90px;
  }
  .btn-success{
   background: linear-gradient(45deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
   border-radius: 15px;
   width: 200px;
   display: flex;
   justify-content: center;
   align-items: center;
      font-weight: 800;
      margin-right: 40px;
  }
</style>
<div class="colorA">
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Add New User</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Your name</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Your username</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="sel1">Select user Role</label>
                    <select class="form-control" name="roleid" id="roleid">
                      <option value="1">Admin</option>
                      <option value="2">Editor</option>
                      <option value="3">User only</option>

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Register</button>
                </div>


            </form>
          </div>


        </div>
      </div>

<?php
}else{

  header('Location:index.php');



}
 ?>
</div>
  <?php
  // include 'inc/footer.php';

  ?>
