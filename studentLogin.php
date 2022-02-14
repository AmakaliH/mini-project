<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSCS | LOGIN</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
      <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

      <style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: RED;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>

</head>

<body class="body-Login-back" style="background-color:grey;">

<div class="sidebar">
  <a class="active" href="#home">Student Login</a>
  <a href="admin/login.php">Admin Login</a>
  <a href="home.html">Home</a>
</div>

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Login to Clear Online</h3> 
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Student No." type="text" autofocus name="reg_number">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" value="" name="pass">
                                </div>
                                <button class="btn btn-lg btn-success btn-block" name="submita">Login</button>
                                <p>Dont have an account? Register <a href="studentRegister.php">Here</a></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
<?php 
global $con;
session_start();
   if(isset($_POST['submita'])){
        $reg=mysqli_real_escape_string($con,$_POST['reg_number']);
        $password=mysqli_real_escape_string($con,$_POST['pass']);
        
        $usercount=0;
        $checkuser="select * from students where regNumber='$reg'";
        $execute=mysqli_query($con,$checkuser);
        $usercount=mysqli_num_rows($execute);
        if($usercount>0){
            while($row_pass=mysqli_fetch_array($execute)){
                $number=$row_pass['regNumber'];
                $name=$row_pass['firstName'];
                $hashpass=$row_pass['password'];
                $hash=password_verify($password,$hashpass);

                if($hash==0){
                    echo '<script>alert("Incorrect Reg. Number or Password!"); window.location="studentLogin.php"</script>';
                }else{
                    session_start();
                    $_SESSION['student_id'] = $row_pass['regNumber'];
                    echo '<script>alert("Welcome Onboard '.$name.' .You can now start the clearance process."); window.location="index.php?id=studentHome"</script>';
                }
            }
        }else{
            echo '<script>alert("Incorrect Reg. Number or Password!"); window.location="studentLogin.php"</script>';
        }
    
}
?>
