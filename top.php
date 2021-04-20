<?php session_start(); ?>
<html>
<head><title> top frame </title>
</head>
<body>
<table border="2" width="100%" bgcolor="grey">
<tr>
<th background="vit.jpg" width=100 height=100  align="center"></th>
<th colspan="4" align="center">VISHNU ONLINE BOOK STORE</th>
</tr>
<tr>
<th><a href="right.html" target="C">Home</a></th>
<?php if(!isset($_SESSION['user_id']))  { ?>
<th><a href="login.php" target="C">Login</a></th>
<?php } else { ?>
    <th><a href="logout.php" target="C" onclick="myFunction();">Logout</a></th>
<?php } ?>
<th><a href="registration.php" target="C">Registration</a></th>
<th><a href="catalogue.php" target="C">Catalogue</a></th>
<th><a href="cart.php" target="C">Cart</a></th>
<th><a href="displayUser.php" target="C">Users</a></th>
<!-- <th><a href="addbook.php" target="C">Add Book</a></th> -->
</tr>
</table>
</body>
<script>
function myFunction() {
    location.reload();
}
</script>
</html>

