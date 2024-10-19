<?php
include("conn.php");
$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT * FROM trainers WHERE id='$id'");
$row=mysqli_fetch_array($select)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
body{
    background-color: green;
}
li{
    list-style-type: none;
}
nav{
    background: #000;
}
ul{
    display: inline-flex;
}
a{
    text-decoration: none;
    padding: 30px;
    color: white;

    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.log{
    float: right;
    margin-top: -40px;
}
.left{
   background: #000; 
   color: white;
   
}
h1{
    color: white;
}
p{
    color: wheat;
}
.middle{
   
    text-align: center;
   
   
}
.image{
    margin: 5px auto;
    padding: 2px;
   
}
.right{
    float: right;
    margin-top: -300px;
}
.middle .kevin{
    text-align: center;
    margin-top: -300px;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="username"value="<?php echo $row['username']?>" >
        <input type="text" name="address"value="<?php echo $row['address']?>" >
        <input type="password" name="password" value="<?php echo $row['password']?>">
        <button name="submit">update</button>
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $update=mysqli_query($conn,"UPDATE trainers SET username='$username',`password`='$password',`address`='$address'WHERE id='$id'");
    if ($update) {
        header("location:select.php");
    }
    else{
        echo"data updated";
    }
}



?>