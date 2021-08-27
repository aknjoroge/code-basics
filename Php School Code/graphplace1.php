<?php
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form4";
$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$servera= "techkey.co.ke";
$usera="techkeyco_graph";
$passworda ="LjZx*[8)+#2X";
$dbnamea="techkeyco_graph_2021";


$conmain=mysqli_connect($servera,$usera,$passworda,$dbnamea);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}



$tablename="endterm_4blue_term1_2021";

for($i=1;$i<=10;$i++){

    $sql= "SELECT * FROM `$tablename` WHERE id ='$i' ";
    $intake=$con -> query($sql);
    if($intake->num_rows >0){ 
        while($row =$intake -> fetch_assoc()
        ){
    $take=$row['ave'];
    $takeadm=$row['adm_no'];
        
            
        } 
    
    }
    else{
        echo"no data";
    }
    

    $table_name="adm_$takeadm";

    $sqlmain= "INSERT INTO $table_name (`term`, `average`) 
     VALUES (null,'$take')";
    if ($conmain->query($sqlmain) === TRUE) {
        echo" update done <br>";
      } else {
        echo "<br/>Error: inserting " . $sqlmain . "<br>" . $con->error;
      }





    
}


?>