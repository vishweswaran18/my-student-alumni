<?php
$FName=$_POST['First_Name'];
$Lname=$_POST['Last_Name'];
$Emailid=$_POST['Email_Id'];
$password=$_POST['psw'];
$confirmpass=$_POST['psw-repeat'];
$mobilenum=$_POST['Mobile_Number'];
$gender=$_POST['Gender'];
$dept=$_POST['Department'];
$paseedout=$_POST['Year_of_passed_out'];
$Profession=$_POST['Profession'];
$Memories=$_POST['Memories'];
$mstatus=$_POST['MARITAL_STATUS_SINGLE'];
$host="localhost";
$dbname="form";
$username="root";
$password="";

$conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
    die("error".mysqli_connect_error());
}
$sql="INSERT into id(f.name,l.name,email.id,password,confirm password,moblie num,gender,dept,passed out,profession,memory,marraige status)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssssssssssss",$FName,$Lname,$Emailid,$password,$confirmpass,$mobilenum,$gender,$dept,$paseedout,$Profession,$Memories,$mstatus);
mysqli_stmt_execute($stmt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Alumni.css">
    
</head>
<body>
    <section class="header">    
    <nav>
            <a href="http://"><img src="https://www.krce.ac.in/images/logo.png" alt=""></a>
            <div class="h1">
                <ul>
                    <li><a href="Alumini.html">HOME</a></li>
                    <li><a href="register.html">ALUMNI</a></li>
                    <li><a href="https://www.krce.ac.in/vision-mission.php">ABOUT US</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                </ul>
            </div>    
        </nav>  
            <h1 class="s">SUBMITED SUCCESSFULLY</h1> 
    </section>        
       
</body>
</html>
<style>
    .s{
        font:  sans-serif;
        text-align: center;
        color: #fff;
    }
</style>