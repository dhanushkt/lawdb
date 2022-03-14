<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/Login.css" />
  </head>
  <body>
    <div class="container">
      <form class="form-1" action="#" method="post">
        <h1>Login</h1>
        <label for="email">Username</label>
        <input type="text" name="email"  required />
        <label for="password">Password</label>
        <input type="password" name="password"  required />
        <span style="color:gray">Forgot Password ? Please Contact Skandha Sales</span>
        <button name="submit" type="submit">Login</button>
      </form>
	  <?php
		if(isset($_POST['submit']))
		{
			error_reporting(1);
			include("config.php");
			$email=$_POST['email'];
			$password=$_POST['password'];
			$sql = "select * from employee where email='$email' and password='$password'";
			$result = mysqli_query($con,$sql);
			$count=mysqlI_num_rows($result);
			if($count>0)
			{
				session_start();
				$_SESSION['employee']=$email;
				$aid=$_SESSION['employee'];
				echo "<script>
				alert('Login Successful $aid');
				</script>";
			echo "<script> location.href='home.php'; </script>";
			}
			else
			{
			echo "<script>
			alert('Invalid Email or Password');
			</script>";
			}
		}
	?>
    </div>
  </body>
</html>
