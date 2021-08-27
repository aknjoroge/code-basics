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
 body{
   background: #34495e; font-family: sans-serif; margin:0;
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    

}
.box2{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 5%;
    left: 20%;
   text-align: center;
    

}
.done{
  border: 0;
  background:rgba(255, 255, 255, 0.76);
display: block;
margin:5px auto;
text-align: center;
border: 2px solid #3498db;
padding: 5px 5px;
width: 100px;
color: white;
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #00ff4cbe;


}

  </style>
</head>
<body>
  <table class="box">
    <tr><td>

      <button class="done"><a href="school.techkey.co.ke/admin" style="text-decoration: none;">GO BACK</a></button>
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

$inid=$_POST['id'];
$indep=$_POST['dept'];
$intsc=$_POST['tsc'];
$inname=$_POST['name'];
$insub=$_POST['sub'];


$sql= "INSERT INTO `teacher` (`id`, `dept`, `tsc`, `name`, `subject`) VALUES (null,'$indep',$intsc,'$inname','$insub')";
if ($con->query($sql) === TRUE) {
echo "<table class='box2'>";
   echo "<br/><td>New record created </td>";
  } else {
    echo "<br/> <td>Error: inserting <td>" . $sql . "<br>" . $con->error;
  }
  echo "</table>";
  $con->close();


?>