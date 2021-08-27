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
    width: 400px;
    padding: 40px;
    background:#191919;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    
color: aliceblue;
}


    </style>
</head>
<body>
    
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
}$settablename="passwords";

$intakeone=$_POST['type'];
$intaketwo=$_POST['department'];

$passone=$_POST['current'];
$passtwo=$_POST['new'];
$passthree=$_POST['confirm'];

switch ($intaketwo) {
    case 'sci':

        $sql2= "SELECT * FROM `$settablename` WHERE user = 'chem' ";
$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
$takepass=$row["pass"];

    }}else{
        echo"no data";
    }
   
    if($takepass==$passone){
        if($passtwo==$passthree){
        $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
        WHERE user = 'math' OR user='chem' OR user='bio' OR user='phy' ";
       
        if ($con->query($sqla) === TRUE) {
          echo "<div class='box'>New record created</div> ";
         } else {
           echo "Error: inserting " . $sqla . "<br>" . $con->error;
         }
        }else{
            echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
        }

    }else{
        echo "<div class='box'>WRONG PASSWORD</div> ";
    }

        break;

        case 'huma':
            $sql2= "SELECT * FROM `$settablename` WHERE user = 'cre' ";
            $intake =$con -> query($sql2);
            if($intake->num_rows >0){ 
                while($row =$intake -> fetch_assoc()
                ){
            $takepass=$row["pass"];
            
                }}else{
                    echo"no data";
                }
               
                if($takepass==$passone){
                    if($passtwo==$passthree){
                    $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
                    WHERE user = 'cre' OR user='hist' OR user='geo' ";
                   
                    if ($con->query($sqla) === TRUE) {
                      echo "<div class='box'>New record created</div> ";
                     } else {
                       echo "Error: inserting " . $sqla . "<br>" . $con->error;
                     }
                    }else{
                        echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
                    }
            
                }else{
                    echo "<div class='box'>WRONG PASSWORD</div> ";
                }
            break;

            case 'lang':
                $sql2= "SELECT * FROM `$settablename` WHERE user = 'eng' ";
$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
$takepass=$row["pass"];

    }}else{
        echo"no data";
    }
   
    if($takepass==$passone){
        if($passtwo==$passthree){
        $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
        WHERE user = 'eng' OR user='kisw'";
       
        if ($con->query($sqla) === TRUE) {
          echo "<div class='box'>New record created</div> ";
         } else {
           echo "Error: inserting " . $sqla . "<br>" . $con->error;
         }
        }else{
            echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
        }

    }else{
        echo "<div class='box'>WRONG PASSWORD</div> ";
    }
                break;
                
                case 'tech':
                    $sql2= "SELECT * FROM `$settablename` WHERE user = 'bs' ";
$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
$takepass=$row["pass"];

    }}else{
        echo"no data";
    }
   
    if($takepass==$passone){
        if($passtwo==$passthree){
        $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
        WHERE user = 'bs' OR user='agri' ";
       
        if ($con->query($sqla) === TRUE) {
          echo "<div class='box'>New record created</div> ";
         } else {
           echo "Error: inserting " . $sqla . "<br>" . $con->error;
         }
        }else{
            echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
        }

    }else{
        echo "<div class='box'>WRONG PASSWORD</div> ";
    }
                    break;

                    case 'art':
                        $sql2= "SELECT * FROM `$settablename` WHERE user = 'art' ";
                        $intake =$con -> query($sql2);
                        if($intake->num_rows >0){ 
                            while($row =$intake -> fetch_assoc()
                            ){
                        $takepass=$row["pass"];
                        
                            }}else{
                                echo"no data";
                            }
                           
                            if($takepass==$passone){
                                if($passtwo==$passthree){
                                $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
                                WHERE user = 'art' OR user='hs' OR user='music'";
                               
                                if ($con->query($sqla) === TRUE) {
                                  echo "<div class='box'>New record created</div> ";
                                 } else {
                                   echo "Error: inserting " . $sqla . "<br>" . $con->error;
                                 }
                                }else{
                                    echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
                                }
                        
                            }else{
                                echo "<div class='box'>WRONG PASSWORD</div> ";
                            }
                        break;

    default:
        # code...
        break;
}

switch ($intakeone) {
    case 'admin':
        $sql2= "SELECT * FROM `$settablename` WHERE user = 'admin' ";
        $intake =$con -> query($sql2);
        if($intake->num_rows >0){ 
            while($row =$intake -> fetch_assoc()
            ){
        $takepass=$row["pass"];
        
            }}else{
                echo"no data";
            }
           
            if($takepass==$passone){
                if($passtwo==$passthree){
                $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
                WHERE user = 'admin'";
               
                if ($con->query($sqla) === TRUE) {
                  echo "<div class='box'>New record created</div> ";
                 } else {
                   echo "Error: inserting " . $sqla . "<br>" . $con->error;
                 }
                }else{
                    echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
                }
        
            }else{
                echo "<div class='box'>WRONG PASSWORD</div> ";
            }
        break;

        case 'login':
            $sql2= "SELECT * FROM `$settablename` WHERE user = 'school' ";
            $intake =$con -> query($sql2);
            if($intake->num_rows >0){ 
                while($row =$intake -> fetch_assoc()
                ){
            $takepass=$row["pass"];
            
                }}else{
                    echo"no data";
                }
               
                if($takepass==$passone){
                    if($passtwo==$passthree){
                    $sqla= "UPDATE `$settablename` SET pass = '$passtwo' 
                    WHERE user = 'school'";
                   
                    if ($con->query($sqla) === TRUE) {
                      echo "<div class='box'>New record created</div> ";
                     } else {
                       echo "Error: inserting " . $sqla . "<br>" . $con->error;
                     }
                    }else{
                        echo "<div class='box'>THE CONFIRM PASSWORD DOESNT MATCH</div> ";
                    }
            
                }else{
                    echo "<div class='box'>WRONG PASSWORD</div> ";
                }
            break;
    
    default:
        # code...
        break;
}







?>