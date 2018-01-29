<?php
session_start();
require ('connect.php');


//include("connect.php");
//$password=md5($password); // Encrypt the password before comparing
//// Checking userid and password //////
$error = '';
//$ok = "0";
if(isset($_POST["submit"]) && isset($_POST["Uname"]) && isset($_POST["Upass"])){
  //Connection to database with mysqli
	
	//get from input 
	$username = $_POST["Uname"];
	$password = md5($_POST["Upass"]);

	
	if(strlen($username) <= 3){
		$error = "Username Must Be More Than 3 Letters";	
	}else{
		if(strlen($password) <= 6){ 
			$error = "Password Must Be More Than 6 Letters"; 
		}else{
			$sql = "SELECT * FROM user WHERE Uname='$username' and Upass='$password'";
			
			$result = mysqli_query($link,$sql);

			
			//var_dump($row);die();
					# code...
					if (mysqli_num_rows($result)==1){
						while ($row=mysqli_fetch_array($result)){
						$_SESSION["user"]=$username;
				$_SESSION["pass"] = $password;
				$_SESSION['uid'] = $row['Uid'];
				$_SESSION['logged'] = true;
				header('location:profile.php');
						}
					}
				else{
					$error="<div class='alert alert-danger text-center'><strong>Error: </strong>The user name or password is not true</strong>$error</div>";
					
				}

			
		}
	}
}
?>
<html>
<head>
   <title>قدّها : تسجيل دخول</title>
   <link href="assets/css/log.css" rel="stylesheet" />
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <link href="assets/css/font-awesome.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <link href="assets/css/custom.css" rel="stylesheet" />
   <link href="assets/css/na.css" rel="stylesheet" />
</head>
<body>
<?php
/*if(isset($error)){
echo "<div class='alert alert-danger text-center'><strong>Error: </strong>$error</div>";
}else if($ok == "1"){
echo "<div class='alert alert-success text-center'><strong>Error: </strong>You Logged In Succsefuly!</div>";
header("refresh:3;url=user.php");
}
*/
echo $error;

?>

  <div class="wrapper">
    <form class="form-signin" method="post"> 
         <img src="assets/img/LogoG.png"  width="150" class="center-block "/>
      <input type="text" class="form-control" name="Uname" placeholder="اسم المستخدم" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="Upass" placeholder="كلمة السر" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember" id="remember" name="remember" class="checkbox"> تذكرني
      </label>
      <button class="btn btn-lg btn-custom btn-block" type="submit" name="submit" value="submit">دخول</button>  
              <p>ليس لديك حساب؟  <a href="regestration.php">إنشاء حساب</a></p>
    </form>
  </div>

  <footer class="container-fluid text-center">
    <?php include"footer.php";?>
  </footer>

</body>
</html>
