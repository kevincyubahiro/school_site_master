<?php
include("conn.php");
$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT * FROM assessment WHERE id='$id'");
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
        <input type="text" name="trade" value="<?php echo $row['trade']?>">
        <input type="text" name="level" value="<?php echo $row['level']?>">
        <input type="text" name="courses" value="<?php echo $row['courses']?>">
        <input type="email" name="email" value="<?php echo $row['em ail']?>">
        <input type="password" name="password" value="<?php echo $row['password']?>">
      
        <button name="submit">update</button>
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
    $courses=$_POST['courses'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $update=mysqli_query($conn,"UPDATE assessment SET firstname='$firstname',`secondname`='$secondname',`trade`='$trade',`level`='$level',`courses`='$courses',`email`='$email',`password`='$password' WHERE id='$id'");
    if ($update) {
        header("location:select.php");
    }
    else{
        echo"data updated";
    }
}



?>