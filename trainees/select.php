<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="select.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div class="btn">


   
    </div>
    
    <table border="1">
    <a href="insert.php" style="color:white";>add new </a>
<tr>
    <th>id</th>
    <th>username</th>
    <th>password</th>
    <td colspan="2">operation</td>
</tr>
<?php
include("conn.php");
$select=mysqli_query($conn,"SELECT * FROM trainers");
while($row=mysqli_fetch_array($select)){

?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['password']?></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>"style="height:100px">delete</a></td>
    <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>
</tr>
<?php
}
?>
    </table>
</body>
</html>