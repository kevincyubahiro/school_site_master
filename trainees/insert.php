<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input{
            height:50px;
            width:600px;
            border-radius:10px;
            margin:30px;
        }
        button{
            height:50px;
            width:100px;
            background: #fff;
          border-radius:10px;
            margin-top:-2px;
         
            
        }
        .form{
            margin:120px auto;
            background-color: black;
            height:300px;
            width:700px;
            border-radius:10px;

        }
        ::placeholder{
text-align:center;
font-size:20px;
        }
       h3{

        color:red;
        text-align:center;
       } 
     a{
        float:right;
        margin-top:-30px;
     }
    </style>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off">
   
        <div class="form">
            
        <h3>LOGIN FORM</h3> 
             
      
        <input type="text" name="username"placeholder="username"required ><br>
        <input type="password" name="password" placeholder="password"required><br>
        <button name="submit">login</button>
        <a href="">Create  new account</a>
        </div>
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO trainers VALUES('',' $username','$password')");
    if ($insert) {
        header("location:select.php");
    }
   
}



?>