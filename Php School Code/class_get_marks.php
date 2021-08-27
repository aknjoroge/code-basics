<?php 

require_once ('global_login.php');


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
.button{
    border: 0;
background-color: rgb(66, 10, 219);
display: block;
margin:7px auto;
text-align: center;
border: 2px solid #3498db;
padding: 5px 5px;
width: 150px;
color: rgb(255, 255, 255);
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #000000;  
}

  </style>


</head>
<body>
    <table class="one">

    <tr>
            <th colspan="21" style=" background-color: #3e6ed4; color: white;">TECHKEY HIGHSCHOOL</th>
        </tr>
        <tr>
<th>Name</th>
<th>Adm_no</th>
<th> KCPE</th>
<th>ENG</th>
<th> KISW</th>

<th> MATH</th>
<th> CHEM</th>
<th>PHY</th>
<th> BIO</th>
<th> CRE</th>
<th>HIST</th>
<th>GEO</th>
<th>AGRIC</th>
<th>BS</th>
<th>ART</th>
<th>HOMES</th>
<th>MUSIC</th>
<th>TOTAL</th>
<th>AVERAGE</th>
<th>GRADE</th>
<th>POSITION</th>

</tr>


<?php
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_storage";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
$exam=$_POST['exam'];
$term=$_POST['term'];
$year=$_POST['year'];
$form=$_POST['form'];
$stream=$_POST['stream'];

//opener_1red_term1_2021
$tablenames= "$exam"._."$form$stream"._."$term"._."$year";

$sql= "SELECT * FROM $tablenames ";

$intake=$con -> query($sql);

if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        echo"
        <tr>
        <td>".$row["name"]."</td>
        <td>".$row["adm_no"]."</td>
        <td>".$row["kcpe"]."</td>
        <td>".$row["eng"]."</td>
        <td>".$row["kisw"]."</td>
        <td>".$row["math"]."</td>
        <td>".$row["chem"]."</td>
        <td>".$row["phy"]."</td>
        <td>".$row["bio"]."</td>
        <td>".$row["cre"]."</td>
        <td>".$row["hist"]."</td>
        <td>".$row["geo"]."</td>
        <td>".$row["agric"]."</td>
        <td>".$row["bs"]."</td>
        <td>".$row["art"]."</td>
        <td>".$row["hs"]."</td>
        <td>".$row["music"]."</td>
        <td>".$row["tot"]."</td>
        <td>".$row["ave"]."</td>
        <td>".$row["grade"]."</td>
        <td>".$row["pos"]."</td>
        
        
        
        </tr>
        
        
        ";
    } 

}
else{
    echo"no data";
}




?>


</table>
<input type="button" class="button"value="Print this page" onClick="window.print()">
</body>
</html>


