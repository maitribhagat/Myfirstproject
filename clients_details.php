<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" 
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
   integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
    crossorigin="anonymous">
    <style> 
    .heading{
        text-align : center;
        
    }
    body{
      background-color:black;
      top:15px;
     
     
    }
    .table{
      background-color:;
      font-size:19px;
    }
   h1{
     color:white;
   }
   th{

   }
    </style>
</head>
<body>
<h1 class = "heading">EMPLOYEE'S  DETAILS</h1>
<br>
<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
   

    
    </tr>
  </thead>
 
   
   <?php $conn = mysqli_connect('localhost:3307','root','' ,'practise')
or die("Connection Failed");


//To fectch data from table
$sql = "SELECT * from signup ";
$result = mysqli_query($conn , $sql) or die("unsuccesful") ;

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){

        echo "<tr><td>".$row["e_first_name"]. "</td><td>"
        .$row['e_last_name']. "</td><td>"
        .$row['e_number']. "</td><td>"
        .$row['e_email']. "</tr></td>";
      
    
      
       
     
    }
   echo " </table>";
}

$conn->close();


  
  ?>
    </table>


    
</body>
</html>