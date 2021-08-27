<?php
$server= "techkey.co.ke";
$user="techkeyco_graph";
$password ="LjZx*[8)+#2X";
$dbname="techkeyco_graph_2021";


$con=mysqli_connect($server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
$dn=techkeyco_graph_2021;

for($i=1;$i<80;$i++){
    $tablename="adm_$i";
    
    $sql="CREATE TABLE `$dn`.`$tablename` ( `term` INT NOT NULL AUTO_INCREMENT , `average` INT(50) NOT NULL,PRIMARY KEY (term) )";

    if ($con->query($sql) === TRUE) {
       echo"all done";
        } else {
          echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
        }

}





?>