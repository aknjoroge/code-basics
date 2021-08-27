
<?php
session_start();

 header ('Content-Type: application/json');

 $server= "techkey.co.ke";
$user="techkeyco_graph";
$password ="LjZx*[8)+#2X";
$dbname="techkeyco_graph_2021";


$conmain=mysqli_connect($server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect two";
    exit();
}


$settablename="adm_".$_SESSION['alladm'];

$sql2= "SELECT * FROM $settablename";
$intake =$conmain -> query($sql2);

if($intake-> num_rows > 0){ 
    
    while($row =$intake -> fetch_assoc() ){
        $data[]=$row;
    }
}


print json_encode($data); 


?>