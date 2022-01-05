<?php include 'header1.php'; ?> 
<?php 
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if(strpos($fullUrl,"alert=successregister")==true){
    echo '<script>alert("Sign Up Successfully")</script>';
  }
?>
  <main id="main">
  
    <form class="form-horizontal" method="POST" action="signinprocess.php">
    <br><br>
      <div id="login-box">
        <div class="left">
          <h1>Sign in</h1>

          <div class = input>
            <input type="text" name="username" placeholder="Username" required="" />
          </div>

          <div class = input>
            <input type="password" name="password" placeholder="Password" required/>
            <a href = "forgetpassword.php" style="font-size:12px;"> Forget Password? </a><br><br><br>
          </div>

          <div class = input>
            <input type="submit" name="signin_submit" value="Sign in" required/><br><br>
          </div>

          <a href = "signup.php" style="font-size:15px;" > Don't have an account yet? </a>
      </div>

    </form>

  </main><!-- End #main -->

<?php include 'footer1.php'; ?> 
