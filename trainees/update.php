<?php
include("conn.php");
$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT * FROM trainees WHERE id='$id'");
$row=mysqli_fetch_array($select)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="firstname"value="<?php echo $row['firstname']?>" >
        <input type="text" name="secondname"value="<?php echo $row['secondname']?>" >
        <input type="email" name="email" value="<?php echo $row['email']?>">
        <input type="text" name="address" value="<?php echo $row['address']?>">
        <input type="text" name="module" value="<?php echo $row['module']?>">
        <input type="password" name="password" value="<?php echo $row['password']?>">
        <button name="submit">update</button>
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){d
    $firstname=$_POST['firstname'];
    $secondname=$_POST['secondname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $module=$_POST['module'];
    $password=$_POST['password'];
    $update=mysqli_query($conn,"UPDATE trainees SET firstname='$firstname',`secondname`='$secondname',`email`='$email',`address`='$address',`module`='$module',`password`='$password' WHERE id='$id'");
    if ($update) {
        header("location:select.php");
    }
    else{
        echo"data updated";
    }
}



?>