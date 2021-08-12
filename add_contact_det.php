<?php

$conn = mysqli_connect('localhost:3307','root','' ,'practise')
or die("Connection Failed");
if(isset($_POST['home']))
  header(location:'./welcome_page.php.html');  
//ye succesful page bna h login ka  n it is linked wid login_maitri_code.php
//bas correct table k sath match kar dena h 
if(isset($_POST['submit'])){
    
   // $email = $_POST['email']; to make it secure
   $Firstname = $_POST['firstname'] ;
   $Lastname = $_POST['lastname'];
    $Country = $_POST['country'];//md makes d password global
    $Subject = $_POST['subject'];
   
    //query to match the password and username
    $sql = ("insert into contact_us(Firstname , Lastname , Subject,Country)
    values ('$Firstname' ,' $Lastname'  , '$Subject' , '$Country') ")
    ;

    $result = mysqli_query($conn , $sql) or 
    die ("Query Failed");


  
  if($result){
    


  echo "<script>alert('Thankyou for contacting us!!'); window.location.href='./home_page_new.html';</script>";

   }
  }


?>
