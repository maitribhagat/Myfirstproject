<?php
//Linked with add_profile for validation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
    <title>Document</title>
    <style>
      *{
        background-color :black; 

      }
 .login_div{
    position: absolute;

    width: 300px;
    height: 300px;

    /*This is succesful login page with no db 
     form on page horizontally & vertically */
    top: 50%;
    left: 50%;
    margin-top: -350px;
    margin-left: -150px;
    

}

.login_form {
    width: 600px;
    height: 800px;

    background: grey;
  /*  border-radius: 10px;*/

    margin: 0;
    padding: 0;
}
.btn  btn-primary{
    align:center;
}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20px;
  
  border: 1px solid green;
}
label,h1{
  color : white;
}
</style>
</head>
<body>

<div  class="login_div">
<h1><strong >   My Profile</strong></h1>
<form class="login_form" 
method = "POST" action="add_profile.php">

  <div class="form-group">
    <label for="designation">Designation:</label>
    <input  style = "color:black;" type="text"  class="form-control"  placeholder="Enter your position" name="designation" aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input style = "color:black;" type="email"  class="form-control" placeholder="Enter your email_id" name="email" aria-describedby="emailHelp"required>
  </div>

  

  <div class="form-group">
    <label  for="Address">Address:</label>
    <input type="text"  style = "color:black;" class="form-control" placeholder="Enter your address" name="Address"required>
  </div>

  <div class="form-group">
    <label for="SSC_marks">SSC Marks:</label>
    <input type="text" style = "color:black;"  class="form-control"placeholder="Enter your marks" name="SSC_marks" aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label for="HSC_marks">HSC Marks:</label>
    <input type="text" style = "color:black;"  class="form-control" placeholder="Enter your marks" name="HSC_marks" aria-describedby="emailHelp" required>  </div>
  <div class="form-group">
    <label for="Graduation_marks">Graduation Marks:</label>
    <input type="text" style = "color:black;"  class="form-control" placeholder="Enter your marks" name="Graduation_marks"aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label for="Joining_date">Joining Date:</label>
    <input type="date" style = "color:black;"  placeholder="Enter your 
  joining date" name="Joining_date"  class="form-control"  aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label for="department">Department:</label>
    <input type="text" style = "color:black;"  class="form-control"  placeholder="Enter Department" name="department" aria-describedby="emailHelp"required>
  </div>

  <div class="form-group">
    <label for="Experience">Experience:</label>
    <input type="text" style = "color:black;"  class="form-control" placeholder="Enter your work
   experience" name="Experience" aria-describedby="emailHelp"required>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  
</div>
  <div class="center">
  <button type="submit" name = "profile_submit" class="form-control btn btn-success">Submit</button>
</div>

</form> 
</div>


</body>
</html>