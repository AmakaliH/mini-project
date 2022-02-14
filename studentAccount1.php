<?php 
session_start();
if(isset($_SESSION['student_id'])){
	
}else{
	echo "<script>window.location='studentLogin.php'</script>";
}
include("connect.php");
include("functions/main.php");
include("functions/functions.php");
logout();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['student_id']?> | OSCS</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <style>

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn1 {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 10%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
    </style>    
   </head>
<body>
    <div id="wrapper">
        <?php include('inc/nav.php');?>
        <?php include('inc/side.php');?>

        <div id="page-wrapper">
            <?php include('inc/head.php');
            ?>
        <div class="row">

           

    

    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    

    <h2>Fees Checkout Form</h2>
<h3>Option1:</h3>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="https://formcarry.com/s/OrPDQwgKncy" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="full names">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="example@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="xxxxxx">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="xxxxx">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="xxxx">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Banks</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;">FNB</i>
              <i class="fa fa-cc-amex" style="color:blue;">Bank Windhoek</i>
              <i class="fa fa-cc-mastercard" style="color:purple;">Standard Bank</i>
              <i class="fa fa-cc-discover" style="color:green;">Ned Bank</i>
            </div>
            <label for="cname">Payment for:</label>
            <input type="text" id="cname" name="cardname" placeholder="Card Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="xxx-xxx-xxx-xxx">
            <label for="fee">Enter Amount:</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="N$x.x">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="202x">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="xxx">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="PAY" class="btn">
      </form>
    </div>
  </div>
</div><br>
<h3>Option 2: proof of payment</h3>

<form action="https://formcarry.com/s/OrPDQwgKncy" method="POST">
  <input type="file" id="myFile" name="filename"><br>
  <input type="submit" value="SUBMIT" class="btn1">
  <br><br>
</form>
</body>

</html>
<?php 
global $con;
$reg = $_SESSION['student_id'];
   if(isset($_POST['update'])){
        $first=mysqli_real_escape_string($con,$_POST['first_name']);
        $last=mysqli_real_escape_string($con,$_POST['last_name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
       
        
        $usercount=0;
        $checkuser="select * from students where regNumber='$reg'";
        $execute=mysqli_query($con,$checkuser);
        $usercount=mysqli_num_rows($execute);
        if($usercount>0){
             $updaterecord = "UPDATE students SET firstName = '$first', lastName = '$last', email = '$email' WHERE regNumber = '$reg'" ;
            $execute=mysqli_query($con,$updaterecord);
             if(!$execute){
                    echo '<script>alert("Update Failed! Please try again"); window.location="studentAccount.php?id=studentAccount"</script>';
                }else{
                    echo '<script>alert("Details Successfully updated"); window.location="studentAccount.php?id=studentAccount"</script>';
                }
            }
        else{
            echo '<script>alert("How did you even manage to bypass my security??..Nakuitia polisi wewe!"); window.location="studentLogin.php"</script>';
        }
   } 
?>