
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
.one{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    background:#191919;

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
    <div class="one">
<button class="done">
<a href="school.techkey.co.ke/admin" > Back</a>
</button>

    </div>
</body>
</html>


<?php

$term=$_POST['term'];
$year=$_POST['year'];
$exam=$_POST['exam'];


$server= "techkey.co.ke";
$user="techkeyco_marks";
$password ="schoolRoot@db";


$con1=mysqli_connect($server,$user,$password,"techkeyco_form1");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$conn=mysqli_connect($server,"techkeyco_root","schoolRoot@db","techkeyco_schooldb");
if(mysqli_connect_error()){
    echo"failed to connect Server 2";
    exit();
}

$con2=mysqli_connect($server,$user,$password,"techkeyco_form2");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$con3=mysqli_connect($server,$user,$password,"techkeyco_form3");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$con4=mysqli_connect($server,$user,$password,"techkeyco_form4");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}







$id=1;



for($form=1;$form<=4;$form++) //Form loop
{
    
$dbnm="techkeyco_form".$form;
$conns=mysqli_connect($server,$user,$password,$dbnm);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
    
    
    
    
    $stt=0;
    
        for($tb=0;$tb<=1;$tb++) //Streams loop
        {
           
            $id=1;
            $std=0;
            
            //Array To Store Streams
            
            $streams=array("red","blue");
           
            
            
             //Search for Index
             
            $stream=$streams[$stt];
            $tableName=$exam."_".$form."".$stream."_".$term."_".$year;
        while($std<=65) //No of Students
        {
            
$sqll= "SELECT * FROM `$tableName` WHERE id='$id'  ";
$intake=$conns -> query($sqll);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        //Storing subject marks
        $eng=$row["eng"];
        $kisw=$row["kisw"];
        $math=$row["math"];
        $chem=$row["chem"];
        $phy=$row["phy"];
        $bio=$row["bio"];
        $cre=$row["cre"];
        $hist=$row["hist"];
        $geo=$row["geo"];
        $agric=$row["agric"];
        $bs=$row["bs"];
        $art=$row["art"];
        $hs=$row["hs"];
        $music=$row["music"];
        
        //Summation of the marks
        
        $tot=$eng+$kisw+$math+$chem+$phy+$bio+$cre+$hist+$geo+$agric+$bs+$art+$hs+$music;
        
        
        //Average
        if($form==3 or $form==4)
        {
            $ave=($tot/8);
        }
        else{
        $ave=($tot/14);    
        }
        
    
    
    //Calculating grade
    
                if($ave<=100)
                {
                    $grad="A";
                
                }
                if($ave<=79)
                {
                    $grad="A-";
                
                }
                if($ave<=74)
                {
                    $grad="B+";
                
                }

                if($ave<=69)
                {
                    $grad="B";
                
                }

                if($ave<=64)
                {
                    $grad="B-";
                
                }
                if($ave<=59)
                {
                    $grad="C+";
                
                }
                if($ave<=54)
                {
                    $grad="C";
                
                }
                if($ave<=49)
                {
                    $grad="C-";
                
                }
                if($ave<=44)
                {
                    $grad="D+";
                
                }
                if($ave<=39)
                {
                    $grad="D";
                
                }
                if($ave<=34)
                {
                    $grad="D-";
                
                }
                if($ave<=29)
                {
                    $grad="E";
                
                }
                if($ave=="")
                {
                    $grad="";
                    
                }
    
    
    
     $sql="UPDATE `$tableName` SET `tot` = '$tot', `ave` = '$ave', `grade` = '$grad' where `id`=$id";
       mysqli_query($conns,$sql);
    } 

}
else{
   
 
}
            
            
            $id=$id+1;
            $std=$std+1;
        }
        
        //Code For Position
      
        
        

//End for Position code
            $stt=$stt+1;
            
            
        } //end of stream loop
  
}



//Calculate Position




$term=$_POST['term'];
$year=$_POST['year'];
$exam=$_POST['exam'];

$server= "techkey.co.ke";
$user="techkeyco_marks";
$password ="schoolRoot@db";

$con5=mysqli_connect($server,$user,$password,"techkeyco_storage");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$con6=mysqli_connect($server,$user,$password,"techkeyco_storage2");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}


for($formt=1;$formt<=4;$formt++){
    
    $dbnmw="techkeyco_form".$formt;
     
     $sttw=0;
     
     for($ft=0;$ft<=1;$ft++)//Stream loop
     {
         $streamsw=array("red","blue");
         $streamw=$streamsw[$ft];
         
         $tableNamew=$exam."_".$formt."".$streamw."_".$term."_".$year;
        //$tableNamew="opener_1blue_term1_2021";
        
        $sql="DROP table $tableNamew";
        mysqli_query($con5,$sql);
        
          $sql="create table techkeyco_storage.$tableNamew SELECT * from $dbnmw.$tableNamew";
         if(!mysqli_query($con5,$sql)){
               echo " <span style='font-size:25px;'>MARKS NOT INSERTED!!!</span> <br>";
               exit();
           }
                   $sql="alter table `$tableNamew` order by tot desc";
                   if(!mysqli_query($con5,$sql)){
               echo "Error in ordering";
           }
                   $sql="ALTER TABLE `$tableNamew` ADD `sort` INT NOT NULL AUTO_INCREMENT AFTER `grade`, ADD `pos` INT NULL AFTER `sort`,
                    ADD PRIMARY KEY (`sort`)";
           if(!mysqli_query($con5,$sql)){
               echo "Error in adding sort";
           }
         
$next=0;
$nextPos=1;
$idsort=1;

for($class=0;$class<=80;$class++){
    

    $sql= "SELECT * FROM `$tableNamew` WHERE sort=$idsort  ";
    $result=$con5-> query($sql);
    if($result-> num_rows > 0)
    { 
        while($row=$result-> fetch_assoc())
        {
          

        $current=$row[tot];


        if($current == $next){
            //Assign same position which again is $nextPos
            //Take pos for previous sort id and assign it
            
            $idsort--;
            
            
            $sql= "SELECT * FROM `$tableNamew` WHERE sort=$idsort  ";
            $intake=$con5 -> query($sql);
            if($intake->num_rows >0){ 
                while($row =$intake -> fetch_assoc()
                ){

                    $prevPos=$row[pos];
                    
                }

            }
            
            
            $next=$current;
            $idsort=$idsort+1;
        }
        $sqll="update `$tableNamew` set pos=$prevPos WHERE sort='$idsort' ";
        mysqli_query($con5,$sqll);





        if($current > $next){
            //Assign 1st pos ONLY using $nextPos
            
            $sql="update `$tableNamew` SET pos=$nextPos WHERE sort=$idsort ";
            mysqli_query($con5,$sql);

            $next=$current;

        }

        
        if($current < $next){
            //Assign pos next using $nextPos
            
            $sql="update `$tableNamew` set pos='$nextPos' WHERE sort='$idsort' ";
            mysqli_query($con5,$sql);

           $next=$current;
        }

       



    }// end of while fetch loop


}

$nextPos=$nextPos+1;
$idsort=$idsort+1;


} //end of class for loop

         
         
         
         $sttw++;
         
         
$sql="ALTER TABLE `$tableNamew` DROP `sort`";
mysqli_query($con5,$sql);
         
     }//end of stream loop
         
  // Start of Stream Position code

  $term=$_POST['term'];
$year=$_POST['year'];
$exam=$_POST['exam'];

  //$sa=0 //for array
  
  
        $strms=array("red");
      $strm=$strms[0];
  $tnm=$exam."_".$formt."".$strm."_".$term."_".$year;
  $formtt="form".$formt."_".$exam."_".$term."_".$year;
  
  $sql="drop table techkeyco_storage2.$formtt";
  mysqli_query($con6,$sql);
  
  $sql="create table techkeyco_storage2.$formtt select * from techkeyco_storage.$tnm ";
      mysqli_query($con6,$sql);
  
  for($sa=1;$sa<=1;$sa++) //Merge classes, increase it as stream increases
  {
      $strms=array("red","blue");
      $strm=$strms[$sa];
      $tableNamep=$exam."_".$formt."".$strm."_".$term."_".$year;
      
      $sql="insert into techkeyco_storage2.$formtt SELECT * from techkeyco_storage.$tableNamep  ";
            if(!mysqli_query($con6,$sql)){
        echo "Error in inserting data<br>";
    }

  }
  
     
           $sql="alter table `$formtt` order by tot desc";
            if(!mysqli_query($con6,$sql)){
        echo "Error in ordering srt";
    }
            $sqll="ALTER TABLE `$formtt` ADD `sort2` INT NOT NULL AUTO_INCREMENT AFTER `pos`, ADD `strm_pos` INT NULL AFTER `sort2`,
             ADD PRIMARY KEY  (`sort2`)";
    if(!mysqli_query($con6,$sqll)){
        echo "Error in adding sort2 and srtm_pos";
    }

    
 
$next=0;
$nextstrm_pos=1;
$idsort=1;

for($class=0;$class<=80;$class++){
    

    $sql= "SELECT * FROM `$formtt` WHERE sort2=$idsort  ";
    $result=$con6-> query($sql);
    if($result-> num_rows > 0)
    { 
        while($row=$result-> fetch_assoc())
        {
          

        $current=$row[tot];


        if($current == $next){
            //Assign same strm_position which again is $nextstrm_pos
            //Take strm_pos for previous sort2 id and assign it
            
            $idsort--;
            
            
            $sql= "SELECT * FROM `$formtt` WHERE sort2=$idsort  ";
            $intake=$con6 -> query($sql);
            if($intake->num_rows >0){ 
                while($row =$intake -> fetch_assoc()
                ){

                    $prevstrm_pos=$row[strm_pos];
                    
                }

            }
            
            
            $next=$current;
            $idsort=$idsort+1;
        }
        $sqll="update `$formtt` set strm_pos=$prevstrm_pos WHERE sort2='$idsort' ";
        mysqli_query($con6,$sqll);





        if($current > $next){
            //Assign 1st strm_pos ONLY using $nextstrm_pos
            
            $sql="update `$formtt` SET strm_pos=$nextstrm_pos WHERE sort2=$idsort ";
            mysqli_query($con6,$sql);

            $next=$current;

        }

        
        if($current < $next){
            //Assign strm_pos next using $nextstrm_pos
            
            $sql="update `$formtt` set strm_pos='$nextstrm_pos' WHERE sort2='$idsort' ";
            mysqli_query($con6,$sql);

           $next=$current;
        }

       



    }// end of while fetch loop


}

$nextstrm_pos=$nextstrm_pos+1;
$idsort=$idsort+1;

} //end of class for loop


  // End of Stream Position code

echo " <span style='font-size:25px;'>FORM_ $formt  _ MARKS CALCULATED</span> <br>";

$sql="ALTER TABLE `$formtt` DROP `sort2`";
mysqli_query($con6,$sql);

}//end of formt loop
 
   
   
       
$con->close();
$conn->close();
$conns ->close();     
$con5 ->close();
?>