<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"db_shop");

?>

<html>
<body>
    <h3 align="center">REGISTRED USERS</h3>

    <table border="1" >
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Gender</td>
        <td>Date of Birth</td>
        <td>Language</td>
        <td>Address</td>
    </tr>
    <?php
    $qry = "SELECT * FROM tbl_user";
    $sql=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_assoc($sql)) 
    {
    ?>
    <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['language'];?></td>
        <td><?php echo $row['address'];?></td>
    </tr>
    <?php } 
    ?>
</table>
</form>
</body>
</html>

