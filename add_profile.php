<?php
if(isset($_POST['profile_submit'])){

 $department = $_POST['department'];
  $designation = $_POST['designation'];
 $P_email = $_POST['email'];
 $Address = $_POST['Address'];
 $SSC_marks = $_POST['SSC_marks'];
 $HSC_marks = $_POST['HSC_marks'];
 $Graduation_marks = $_POST['Graduation_marks'];
 $Experience = $_POST['Experience'];
 $Joining_date = $_POST['Joining_date'];



$conn = mysqli_connect('localhost:3307','root','' ,'practise')
or die("Connection Failed");

$sql = ("Insert into profile( 
designation ,
P_email,
Address,
SSC_marks, 
HSC_marks ,
Joining_date,
Graduation_marks,
Experience ,

department  )
  values (
    '$designation',
  '$P_email',
  '$Address',
  '$SSC_marks', 
  '$HSC_marks ',
  '$Joining_date' ,
 
  '$Graduation_marks',
  '$Experience' ,
  
  '$department') ");

 //$stmt->bind_param('sssiiisi',$designation ,
 //$P_email,$SSC_marks, 
//$HSC_marks ,$Graduation_marks,
 //$Experience ,$Joining_date);$stmt->execute();

 $res = mysqli_query($conn , $sql) or die("unsuccesful") ;
 
 
 if($res)
 echo "Your data has been submitted successfully!!" ;
     


  }


?>



