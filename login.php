<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"db_shop");


    if(isset($_POST["sub"])) 
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `tbl_user` WHERE  `name`='$name' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) 
        {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$row['user_id'];
            $msg = "You are logged in";
           
        } 
        else 
        {
            $msg = "Invalid login";
        }
    }

?>

<html>
<body bgcolor="grey">
<h1 align="center" >Login Page<h1>
<?php 
if(isset($msg)) {
    echo $msg;
} else {
?>
<table border="1" align="center">
    <tr>
       <form name="form1" method="post" align="left">
       <td> 
        Name : <input type="text" name="name" size="20" maxlength="20">
        </td>
    </tr>
    <tr>
       <td>Password:<input type="password" name="pass"></td>
    </tr>
    <tr align="center"><td>
<input type="submit" name="sub" value="Login">
<input type="reset">
</tr></td>
</form> <?php } ?>
</body>


</html>
