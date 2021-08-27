SQL:
Using The Hotel Table as an example the following can run in a html/web environment;
$sql="INSERT INTO `hotel`( `Hotel_No`, `Name` ,`City`) VALUES ('$hotelno','$hotelname','$hotelcity')";
//the command inserts data to the hotel table

if($con->query($sql) == true){ 
    echo "<br/>New record created <br>";
    echo "view Hotel list <a href='hotelview.php'>here</a>";
   } else {
     echo "<br/> Error: inserting " . $sql . "<br>" . $con->error;
   }
// query($sql) is used to run the sql query ex its like compiling and the results are stored in $con.
//we then test to see if con is true, if its true the New record and view hotel echo is run
// echo is just printf() in php
//if task is false the error message is run



$sql="SELECT * FROM hotel";
//SQL command to retrive all data from the database

$intake=$con->query($sql);
//the results are stored in $intake that we use to display the data in the table


if($intake->num_rows >0){ 
// checks if $intake has number of rows greater than 0; if no it will display no data
//if number of rows are found then the while loop runs and the results of while are stored in the $row variable that acts as an array
    while($row =$intake -> fetch_assoc()
    ){
        echo"
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["Hotel_No"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["City"]."</td>
        </tr>
        ";

      //$row["id"]  // gets data from $row "array" in the index['id'] the id is the name given to the column in the table
       // thus  $row["City"]  gets data from a column called City
    } 
}
else{
    echo"no data";
}

$sql="Delete from hotel where id=$idtodelete";
//delets data from hotel table where the id is the data stored in $idtodelete


$sql="ALTER TABLE `room` DROP `id`";
//delete's the id column
    mysqli_query($con,$sql);
//runs the query
    $sql="ALTER TABLE `room` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD UNIQUE (`id`)";
//add the id column back and give is  attribute : To be an int , to auto increment , not to be null and be unique
    mysqli_query($con,$sql);

