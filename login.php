<html>
<head>
	<link rel="stylesheet" href="css/signin-style.css">
	<script src="js/signin.js"></script>
</head>











<body>
<div class="login_form_con">
  <div id="black3" onclick="showlogin()"></div>
	<div class="con_signin">
	<img src="img/211652_close_icon.png" class="close_signin" onclick="showlogin()"></img>
		<h1 class="label">Login form</h1>
		<form class="login_form" method="post">
			<input  type="text" name="email" placeholder="Enter your username or email"  id="email" onkeyup="fun_user()">
			<div id="email_error2">Please fill up your Email or username</div></p>
			<input type="password" name="password" placeholder="Enter Password" id="password" onkeyup="fun_pass()">
			<div id="pass_error2">Please fill up your Password</div></p>
			<button type="submit" onclick="fun()">sign in</button>
		<p class="item2"><input type="checkbox" style="width:15px;height:11px"></input> keep me sign in</p>
				<p class="item2"><input type="checkbox" style="width:15px;height:11px"></input> I accept the terms & condntions</p>
			<p class="item2"> forgot your password ?  <a href="#"> reset </a> </p>
			<p class="item2"> not a member ? <a href="#" onclick="showlogin(), show_signup()"> signup  </a>
		<div class="social_signin">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
    </div>
		</form>
	</div>
	</div>
</body>
</html>


<?php ob_start();

 include("connection.php");   

   if (isset($_POST['email'])== true) {
	 
		 $email = $_POST['email'];
        $password = $_POST['password'];
       $result= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
        $num = $con->affected_rows;
        if($num==1) {
	echo  '<a href="logout.php">Logout</a>';
	
		
		 echo $_SESSION['id']=id;
			
          echo "loged";
        } else {
          echo "login failed";
		  echo   	'<div class="logo">
        <a href="#" id="hide-login" onclick="showlogin()">login</a>
        <a href="#" id="hide-register-login" onclick="show_signup()">| register</a>
      </div>';
		  
		  
        }
    }
	ob_end_flush();
     ?>
