

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        background-color: thistle;
    }
 table{
     background-color: white;
    border: 5px solid rgb(49, 45, 45); 
letter-spacing: 1px;
font-weight: bold;border-radius: 0px 0px 5px 0px;
border-collapse: separate; width: 97%; font-family: monospace;
font-size: 20px;
text-align: center;

}
table th{
    background-color: #7099f0; color: white;
}
table tr:hover{
    background-color: #f2f2f2;
}
.tittle{
    width: 100%;
    color: black;
    background-color: #f2f2f2;
}
    
</style>
</head>
<body>


    <table>
        
      <tr >
          <th colspan="6" class="tittle" > Bookings <th>
              
          </tr>
        <tr>
            <th colspan="1">ID</th>
   
    <th colspan="1">Hotel Number</th>
    <th colspan="1">Guest Number</th>
    <th colspan="1">Date From</th>
    <th colspan="1">Date To</th>
    <th colspan="1">Room Number</th>


</tr>
<?php
$server="localhost";
$user="class";
$password="class";
$database="class";

$con=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error()){
    echo" Connection Failed <br>";
}
if(!(mysqli_connect_error)){
    echo"connection success<br>";
}
$sql="SELECT * FROM booking";
$intake=$con->query($sql);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        echo"
        <tr>
            <td>".$row["id"]."</td>
            <td>".$row["Hotel_No"]."</td>
        <td>".$row["Guest_No"]."</td>
        <td>".$row["Date_From"]."</td>
        <td>".$row["Date_To"]."</td>
        <td>".$row["Room_No"]."</td>
        
        </tr>
        ";
    } 
}
else{
    echo"no data";
}

?>
    </table>


    <form action="deletebook.php" method="POST">
        <input type="number" name="idremove" id="" placeholder="Enter ID">
       
        <input type="submit" value="delete Entry">
        
    </form>
  
</body>
</html>
