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
for($a=1;$a<=10;$a++){

    

    $table_name="midterm_4blue_term1_2021";

    
    $rand= rand(2, 10);
    $rand2= rand(-1, 3);
    $one=68+$rand +$rand2;
    $two=40+$rand +$rand2;
    $three=65+$rand +$rand2;
    $four=55+$rand +$rand2;
    $five=66+$rand +$rand2;
    $six=56+$rand +$rand2;
    
    $seven=55+$rand +$rand2;
    $eight=23+$rand +$rand2;
    $nine=45+$rand +$rand2;
    $ten=57+$rand +$rand2;
    $elleven=28+$rand +$rand2;
    $twelve=62+$rand +$rand2;
    $thirteen=37+$rand +$rand2;
    $fourteen=54+$rand +$rand2;
    
    
    
    $subject_session1="eng";
    $subject_session2="kisw";
    $subject_session3="math";
    $subject_session4="chem";
    $subject_session5="bio";
    $subject_session6="cre";
    
    $subject_session7="hist";
    $subject_session8="geo";
    $subject_session9="agric";
    $subject_session10="bs";
    $subject_session11="art";
    $subject_session12="hs";
    $subject_session13="music";
    $subject_session14="phy";
    
    $adma =$a;
    
    
    $sql= "UPDATE $table_name SET $subject_session1 = $one WHERE id =$adma";
    if ($con->query($sql) === TRUE) {
        echo" $table_name";
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
      }
    
    
    $sql2= "UPDATE $table_name SET $subject_session2 = $two WHERE id =$adma";
    if ($con->query($sql2) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql2 . "<br>" . $con->error;
      }
      
    
    $sql3= "UPDATE $table_name SET $subject_session3 = $three WHERE id =$adma";
    if ($con->query($sql3) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql3 . "<br>" . $con->error;
      }
    
    $sql4= "UPDATE $table_name SET $subject_session4 = $four WHERE id =$adma";
    if ($con->query($sql4) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql4 . "<br>" . $con->error;
      }
    
    $sql5= "UPDATE $table_name SET $subject_session5 = $five WHERE id =$adma";
    if ($con->query($sql5) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql5 . "<br>" . $con->error;
      }
    
    $sql6= "UPDATE $table_name SET $subject_session6 = $six WHERE id =$adma";
    if ($con->query($sql6) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql6 . "<br>" . $con->error;
      }
    
      $sql7= "UPDATE $table_name SET $subject_session7 = $seven WHERE id =$adma";
    if ($con->query($sql7) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql7 . "<br>" . $con->error;
      }
    
      $sql8= "UPDATE $table_name SET $subject_session8 = $eight WHERE id =$adma";
    if ($con->query($sql8) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql8 . "<br>" . $con->error;
      }
    
      $sql9= "UPDATE $table_name SET $subject_session9 = $nine WHERE id =$adma";
    if ($con->query($sql9) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql9 . "<br>" . $con->error;
      }
    
      $sql10= "UPDATE $table_name SET $subject_session10 = $ten WHERE id =$adma";
    if ($con->query($sql10) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql10 . "<br>" . $con->error;
      }
    
      $sql11= "UPDATE $table_name SET $subject_session11 = $elleven WHERE id =$adma";
    if ($con->query($sql11) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql11 . "<br>" . $con->error;
      }
      $sql12= "UPDATE $table_name SET $subject_session12 = $twelve WHERE id =$adma";
    if ($con->query($sql12) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql12 . "<br>" . $con->error;
      }
      $sql13= "UPDATE $table_name SET $subject_session13 = $thirteen WHERE id =$adma";
    if ($con->query($sql13) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql13 . "<br>" . $con->error;
      }
      $sql14= "UPDATE $table_name SET $subject_session14 = $fourteen WHERE id =$adma";
    if ($con->query($sql14) === TRUE) {
      echo"done okay";
      } else {
        echo "<br/>Error: inserting " . $sql14 . "<br>" . $con->error;
      }
     
    


}

?>