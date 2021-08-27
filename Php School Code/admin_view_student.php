<?php

require_once ('global_login.php');
require_once ('verify_adminlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <th colspan="8" style=" background-color: #3e6ed4; color: white;">TECHKEY HIGHSCHOOL</th>
        </tr>
        <tr>
<th>Name</th>
<th>Adm_no</th>
<th>Form</th>
<th> Contact</th>
<th> KCPE</th>
<th> Primary_sch</th>
<th> Year</th>
<th>Stream</th>
</tr>


<?php
$server= "localhost:3306";
$user="techkeyco_root";
$password ="schoolRoot@db";
$dbname="techkeyco_schooldb";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$sql= "SELECT * FROM `student`";
$intake=$con -> query($sql);

if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        echo"
        <tr>
        <td>".$row["name"]."</td>
        <td>".$row["adm_no"]."</td>
        <td>".$row["form"]."</td>
        <td>".$row["contact"]."</td>
        <td>".$row["kcpe"]."</td>
        <td>".$row["primary_school"]."</td>
        <td>".$row["year"]."</td>
        <td>".$row["stream"]."</td>
        
        
        
        </tr>
        
        
        ";
    } 

}
else{
    echo"no data";
}




?>


</table>

</body>
</html>


