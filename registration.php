<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"db_shop");

if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $language = $_POST['language'];
    $address = $_POST['address'];
    mysqli_query($conn,"INSERT INTO `tbl_user` ( `name`, `password`, `email`, `phone`, `gender`, `dob`, `language`, `address`) VALUES ( '$name', '$password', '$email', '$phone', '$gender', '$dob', '$language', '$address');");
    header("location:login.php");   
}

?>

<html>
<body bgcolor="grey">
    <h3 align="center">REGISTRATION FORM</h3>
<form method="post" action="">
<table border="0" align="center" >
            <tr>
        <td> <label for="name">Name</label></td>
        <td><input type="text" name="name" > </td>
            </tr>

      <tr>
        <td> <label for="password">Password</label></td>
        <td> <input type="password" name="password" ></td>
      </tr>
      <tr>
        <td> <label for="email">Email ID</label></td>
        <td><input type="text" name="email" ></td>
      </tr>
      <tr>
        <td> <label for="phone">Phone</label></td>
        <td><input type="number" name="phone" ></td>
      </tr>
      <tr>
         <td> <label for="Gender">gender</label></td>
         <td> <input type="radio" name="gender" value="male"> Male<br>
              <input type="radio" name="gender" value="female"> Female<br>
              <input type="radio" name="gender" value="other"> others</td>
      </tr>
      <tr>
         <td> <label for="dob">DOB</label></td>
         <td><input type="date" name="dob" > </td> 
      </tr>
    <tr>
        <td> <label for="language">Language</label></td>
        <td> <select name="language">
             <option value="english">English</option>
             <option value="telugu">Telugu</option>
             <option value="hindi">Hindi</option>
             <option value="tamil">Tamil</option>
             </select></td>
    </tr>
    <tr>
        <td> <label for="address">Address</label> </td> 
        <td> <textarea name="address" rows="4" cols="50"></textarea> </td>
   </tr>
   <tr>
     <td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>

