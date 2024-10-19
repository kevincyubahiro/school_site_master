<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">add new </a>
    <table border="1">
<tr>
    <th>id</th>
    <th>firstname</th>
    <th>secondname</th>
    <th>trade</th>
    <th>level</th>
    <th>courses</th>
    <th>email</th>
    <th>password</th>
   
    <td colspan="2">operation</td>
</tr>
<?php
include("conn.php");
$select=mysqli_query($conn,"SELECT * FROM assessment");
while($row=mysqli_fetch_array($select)){

?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['firstname']?></td>
    <td><?php echo $row['secondname']?></td>
    <td><?php echo $row['trade']?></td>
    <td><?php echo $row['level']?></td>
    <td><?php echo $row['courses']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['password']?></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
    <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>
</tr>
<?php
}
?>
    </table>
</body>
</html>