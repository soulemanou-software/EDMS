<style media="screen">

  *{
    padding: 0;
    margin: 0;

  }
  body{
    padding: 0;
    margin: 0;
    background: #E1E1E1;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .contaner{
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    width: 322px;
    height: 403px;
  border-radius: 10px;
    background: linear-gradient(45deg ,#319197,#D03224,#AE022E,#319197,#477885,#319197,#319197,#319197,#902447 ,#F9711A,#D03224,#AE022E);
      box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -38px rgba(0,0,0,5);
}
.
  .set__form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    border: none;
    border-radius: 10px;
    width: 308px;
    height: 392px;
  }
.reset__herder{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 5px;
  width: 308px;
  height: 60px;
  background: #fff;
  border-radius: 10px 10px 0px 0px;
}
form{
  display: flex;
  flex-direction: column;
  border-radius: 0 0 10px 10px;
  grid-gap: 1rem;
  justify-content: center;
  align-items: center;
  background: #fff;
  width: 308px;
  height: 325px;
}
.form--inputs input{
  width: 250px;
  height: 35px;
  margin: 5px;
  padding: 9px;
  border-radius: 8px;
  background-color: #E1E1E1;
  border:none;
}
.form--inputs input:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 10px  #6D9DEF;
}
.reset--button{
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin-top: 25px;
}
.reset--button input[type="submit"],input[type="reset"]{
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
  border-radius: 10px;
  margin: 0.5rem;
  width: 130px;
  height: 35px;
  background: linear-gradient(50deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
  font-weight: 600;
  color: #FFFFFF;
}
input::placeholder{
  font-weight: 600;
  color: #F9711A;
}
p{
  font-family: 'Baloo 2', cursive;
}
.reset__herder h2{
  font-family: 'Baloo 2', cursive;
  font-weight: 900;
  font-size: 27px;
  color: #F66C1B;
}
.form--inputs input{
  font-family: 'Baloo 2', cursive;
  font-weight: 900;
}
.reset--button input[type="reset"]{
  font-family: 'Baloo 2', cursive;
  font-weight: 800;
  font-size: 14px;
}
.reset--button input[type="submit"]{
  font-family: 'Baloo 2', cursive;
  font-weight: 800;
  font-size: 14px;
}
</style>
<link rel="stylesheet" href="css__font__family\font.css">
<div class="contaner">
  <!-- ############################# Here your reset your password ################################################### -->
  <div class="set__form">
    <div class="reset__herder">
      <h2>Reset Your Password !</h2>
    </div>
    <form class="form--inputs" action="resetpassword__function.php" method="post">
      <p><input type="email" name="email" value="" placeholder="Email"></p>
      <p><input type="text" name="password" value="" placeholder="New-Password"></p>
      <p> <input type="text" name="password" value="" placeholder="Re-type password"></p>
      <p class="reset--button"> <input type="reset" name="reset__form" value="Reset Form" >
          <input type="submit" name="submit" value="Submit" >
      </p>
    </form>
  </div>
</div>
