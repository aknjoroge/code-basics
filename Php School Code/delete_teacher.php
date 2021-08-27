<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
 body{
   background: #34495e; font-family: sans-serif; margin:0;
}
        .one{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 11%;
    left: 35%;
   text-align: center;
   

}
.two{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 5%;
    left: 20%;
   text-align: center;
   

}


.done{
  position: absolute;
  top: 10%;
    left: 35%;
  border: 0;
background:rgba(255, 255, 255, 0.76);
display: block;
margin:5px auto;
text-align: center;
border: 2px solid #ffffff;
padding: 5px 5px;
width: 100px;
color: rgb(255, 255, 255);
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #00ff4cbe;


}
  </style>
</head>
<body>
  <table class="one">
    <tr><td>

      <button class="done" ><a href="school.techkey.co.ke/admin" style="text-decoration: none;">BACK</a></button>
    </td></tr>
  </table>
</body>
</html>

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
echo" connection success"; 

$name=$_POST['name'];
$tscin=$_POST['tsc_no'];

$sql2="SELECT * FROM teacher  WHERE tsc= $tscin";
$intake=$con -> query($sql2);
if($intake->num_rows >0){ 
  while($row =$intake -> fetch_assoc()
  ){

    $names=$row["name"];
    $tscs=$row['tsc'];

  }}

if($name==$names && $tscin==$tscs ){
  $sql="Delete from teacher where tsc=$tscin";
  if(mysqli_query($con,$sql))
  {echo "<table class='two'>";
      echo "<tr><td>Deleted Succesfully</td></tr>";
      
      echo "</table>";
      $sql="ALTER TABLE `teacher` DROP `id`";
      mysqli_query($con,$sql);
      $sql="ALTER TABLE `teacher` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD UNIQUE (`id`)";
      mysqli_query($con,$sql);
  }


}

else{
    echo "Not Deleted: Name and TSC_NO Dont Match";
}



?>