<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
  
    <form action="" method="post" class="form was-validated bg-dark">
        <input type="text" name="username" ><br><br>
        <input type="text" name="address" ><br><br>
        <input type="password" name="password" ><br>
        <button name="submit">login</button>
    </form>
    
</div>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $insert=mysqli_query($conn,"INSERT INTO trainers VALUES('',' $username','$password','$address')");
    if ($insert) {
        header("location:select.php");
    }
    else{
        echo"data not inserted";
    }
}



?>