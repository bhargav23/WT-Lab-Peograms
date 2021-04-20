<?php
setcookie("user1", "user1", time() + 60, "/");
setcookie("user2", "user2", time() + 60, "/");
setcookie("pwd1", "pwd1", time() + 60, "/");
setcookie("pwd2", "pwd2", time() + 60, "/");
    if(isset($_POST["sub"])) 
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        if($name == $_COOKIE['user1'] && $pass == $_COOKIE['pwd1'])
            $msg = "Welcome to ".$_COOKIE['user1'];
        else if($name == $_COOKIE['user2'] && $pass == $_COOKIE['pwd2'])
            $msg = "Welcome to ".$_COOKIE['user2'];
        
        else 
            $msg = "Invalid login";
    }
?>
<html>
<body bgcolor="grey">
<h1 align="center" >Login Page</h1>
<?php 
if(isset($msg)) {
    echo $msg;
} else {
?>
<table border="1" align="center">
    <tr>
       <form name="form1" method="post" align="left">

       <td> Name :<input type="text" name="name"></td>
        
    </tr>
    <tr>
       <td>Password:<input type="password" name="pass"></td>
    </tr>
    <tr align="center">
    <td>
     <input type="submit" name="sub" value="Login">
     <input type="reset"></td>
    </tr>
</form>
</table> <?php } ?>
</body>
</html>
