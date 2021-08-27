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
.one input[type="password"],.one input[type="password"]{
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
.one input[type="text"],.one input[type="text"]{
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
.one input[type="password"]:focus,.box input[type="password"]:focus{
    width: 280px;
    border-color: #2ecc71;
}
.one input[type="text"]:focus,.box input[type="text"]:focus{
    width: 280px;
    border-color: #2ecc71;
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
border-color: #b3ff00;

}
label{
    color: white;
    font-weight: 500;

}

    </style>
</head>
<body>
    <div class="one">
    <form action="admin_pass_confirm.php" method="POST">
        <label>ADMIN:</label>

        <input type="password" name="pass" placeholder="password"/>
        <input type="submit" value="submit" name="submit"/>
    </form>
</div>
</body>
</html>