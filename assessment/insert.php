<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>					email	password	
    <form action="" method="post">
        <input type="text" name="firstname" ><br>
        <input type="text" name="secondname" ><br>
        <input type="text" name="trade" ><br>
        <input type="text" name="level" ><br>
        <input type="text" name="courses" ><br>
        <input type="email" name="email" ><br>
        <input type="password" name="password" ><br>
        <button name="submit">login</button>
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $secondname=$_POST['secondname'];
    $trade=$_POST['trade'];
    $level=$_POST['level'];
    $module=$_POST['module'];
    $courses=$_POST['courses'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $module=$_POST['module'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO assessment VALUES('',' $firstname','$secondname','$trade','$level','$course','$email','password')");
    if ($insert) {
        header("location:select.php");
    }
    else{
        echo"data not inserted";
    }
}



?>