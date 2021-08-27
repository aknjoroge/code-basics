<?php

require_once ('global_login.php');
require_once ('verify_adminlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <style>

        .one{
border: 5px solid rgb(49, 45, 45); columns: #588c7e;; 

letter-spacing: 1.5px;

font-weight: bold;border-radius: 5px 0px 5px 0px;
border-collapse: collapse; width: 100%; font-family: monospace;
font-size: 20px;
text-align: center;

}
th{
    background-color: #7099f0; color: white;
}
tr:nth-child(even){
    background-color: #f2f2f2;
}

  </style>
    
</head>
<body>
    <table class="one">
        <tr>
            <th colspan="5" style=" background-color: #3e6ed4; color: white;">TECHKEY HIGHSCHOOL</th>
        </tr>
        <tr>
<th>Id</th>
<th>Department</th>
<th>Tsc_no</th>
<th> Name</th>
<th>Subject</th>
</tr>


<?php
$server= "localhost:3306";
$user="techkeyco_root";
$password ="schoolRoot@db";
$dbname="techkeyco_schooldb";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"Display error";
    exit();
}


$sql= "SELECT * FROM `teacher`";
$intake=$con -> query($sql);

if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){

        echo"
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["dept"]."</td>
        <td>".$row["tsc"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["subject"]."</td>
       
        </tr> 
        ";
        
    } 

}
else{
    echo"no data";
}

$con->close();


?>
    </table>
</body>
</html>



