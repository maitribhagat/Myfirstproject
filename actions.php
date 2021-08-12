<?php 

$conn = mysqli_connect('localhost:3307' , 'root' , '' , 'practise')
 or die("Connection Failed");


$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass = base64_encode($password);

$c_password = $_POST['c_pasword'];
if($_POST['password'] != $_POST['c_pasword'])
  echo "<script>alert('Your confirmation  password is wrong!! '); window.location.href='./final_registeration.php';</script>";



//Database connection

if(isset($_POST['register'])){

$sql = ("insert into signup
    (e_first_name ,e_last_name , e_number,
   e_email , e_password )
    values (
      '$FirstName',
    '$LastName',
    '$number',
    '$email', 
    '$password ') ");
    $result = mysqli_query($conn , $sql) 
    or die("unsuccesful") ;
 
 if($result)
   

   echo "<script>alert('You Have Registered Suceesfully!! '); window.location.href='./enetrance.php';</script>";

 
   
    $conn->close();

//we are using the same pg for db connection
    }
?>