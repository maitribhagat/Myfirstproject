<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">
    <title>Document</title>
    <style>
 .login_div{
    position: absolute;

    width: 300px;
    height: 300px;

    /*This is succesful login page with no db 
     form on page horizontally & vertically */
    top: 50%;
    left: 50%;
    margin-top: -150px;
    margin-left: -150px;
}

.login_form {
    width: 300px;
    height: 200px;
    background: purple;
  /*  border-radius: 10px;*/

    margin: 0;
    padding: 0;
}
.btn  btn-primary{
    align:center;
    
}
*{
  background-color:purple;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20px;
  
  border: 2px solid green;
}
label{
  color:white;
 /* font-size:30px;*/
 text-align:center;
 
}
</style>
</head>
<body>
    
<div  class="login_div">
<form class="login_form" method = "POST" action = "./admin_connectivity.php" >

  <div class="form-group">
    <label for="userName">Username:</label>
    <input type="text" name = "userName"class="form-control"  aria-describedby="emailHelp" required>

  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" required>
  </div>
 

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <div class="center">
  <button type="submit" name = "submit" class="form-control btn btn-success">Submit</button>
  </div>


</form>
</div>


</body>
</html>