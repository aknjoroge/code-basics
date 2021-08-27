<?php

require_once ('global_login.php');
require_once ('verify_adminlogin.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Exam</title>
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
.one label{
    color: white;
    font-weight: 500;
}
.one h3{
    color: white;
    font-weight: 500;
}
.one select{
    border: 0;
background: none;
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
border-color: #f52525;

}
.one input[type="submit"]{
    border: 0;
background: none;
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
border-color: #33ff00;

}


</style>

</head>
<body>
<div class ="one">
    <h3>Register New Examination</h3>
    <hr></hr>

<form action="examssession_code.php" method="post">
                            

                            <label for="y">Term</label><br>
                            <select name="term" id="">
                                <option value="term1">Term 1</option>
                                <option value="term2">Term 2</option>
                                <option value="term3">Term 3</option>
                                </select>
                                
                                 <label for="y">Exam Type</label><br>
                            <select name="exam" id="">
                                <option value="opener">Opener</option>
                                <option value="midterm">Mid-Term</option>
                                <option value="endterm">End-Of-Term</option>
                                </select>

                                <label for="y">Year</label><br>
                                <select name="year" id="">
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    
                                </select>

                           

                            <br>
                     
                            <input class="btnn" type="submit" value="Submit">
                
                        
                        </form>
                        </div>


</body>
</html>