

<!DOCTYPE html>
<html lang="en">
<head>
    <!--This document retrives data from the hotel table and displays it in a html table-->
     <!--optional styling-->
<style>
   
 table{
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
          <th colspan="4" class="tittle" > Hotels<th>
              
          </tr>
        <tr>
        <th colspan="1">id</th>
    <th colspan="1">number</th>
<th colspan="1">name</th>
<th colspan="1">city</th>

</tr>
<?php
//database credentials
$server="localhost";
$user="class";
$password="class";
$database="class";
//Testing the connection
$con=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error()){
    echo" Connection Failed <br>";
}
if(!(mysqli_connect_error)){
    echo"connection success<br>";
}
//SQL command to retrive all data from the database
$sql="SELECT * FROM hotel";
$intake=$con->query($sql);
//if the result is found not to be empty then the while loop below cycles retriving the documents stored in the database
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        echo"
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["Hotel_No"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["City"]."</td>
        </tr>
        ";
    } 
}
else{
    echo"no data";
}

?>
    </table>
    <!--The form below send an id to deltehotel.php file so as to delete a form entry-->
    <form action="deletehotel.php" method="POST">
        <input type="number" name="idremove" id="" placeholder="Enter ID">
       
        <input type="submit" value="delete Entry">
        
    </form>
</body>
</html>
