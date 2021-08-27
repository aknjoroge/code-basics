<?php

require_once ('global_login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style > 
    
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
    background:#191919;

}
.box input[type="text"],.box input[type="text"]{
border: 0;
background: none;
display: block;
margin:10px auto;
text-align: center;
border: 2px solid #3498db;
padding: 15px 10px;
width: 200px;
color: white;
outline: none;
border-radius: 24px;
transition: 0.25s;

}
.box input[type="text"]:focus,.box input[type="text"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.box label{
    color: white;
    font-weight: 500;
}
.box input[type="submit"]{
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
border-color: #88ff00;

}
select{
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
border-color: #3498db;  
}


    </style>
</head>
<body>
    <div class="storeform">
        
        <div class="inner">
    <form action="class_get_marks.php" method="POST" class="box"  > 
        <label>CHOOSE EXAM TYPE</label>
       <hr>
        <select name="exam">
            
            <option value="opener" >Opener</option>
            <option value="midterm">Midterm</option>
            <option value="endterm">Endterm</option>
            
        </select>
        
        <select name="term" >
            <option value="term1">term1</option>
            <option value="term2">term2</option>
            <option value="term3">term3</option>

           
            
        </select>
       
     
        
        <select name="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
      

        <select name="form">
            <option value="1">one</option>
            <option value="2">two</option>
            <option value="3">three</option>
            <option value="4">four</option>
        </select>

        <select name="stream">
            <option value="red">red</option>
            <option value="blue">blue</option>
          
        </select>
        <br>

<input type="submit" name="submit" value="VIEW" class="submit"></input>


    </form>
    </div>
</div>


</body>
</html>
