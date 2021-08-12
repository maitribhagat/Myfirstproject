<?php




$conn = mysqli_connect('localhost:3307','root','' ,'practise')
or die("Connection Failed");

/*
$ID = $_POST['userName'];
$Password = $_POST['password'];
*/
if(isset($_POST['submit'])){


$username = $_REQUEST['userName'];
 $password = $_REQUEST['password'];           

  
    $query = mysqli_query($conn,"select * from admin where userName = '$username' AND password = '$password' ");
    $row  = mysqli_num_rows($query);
    if($row >= 1)
    {

  
    echo "<script>alert('You have loginned sucessfully'); window.location.href='./adminDash.html';</script>";


    }
    else{
        
    
        echo "<script>alert('You have entered wrong details'); window.location.href='./admin_login.php';</script>";
}

}


?>