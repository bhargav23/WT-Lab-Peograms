<?php 
session_start();

if(!isset($_SESSION['user_id'])) 
    header('location:login.php');

$servername = "localhost";
$username = "root";
$password = "";
$db = "db_shop" ;
// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysql_connect());

mysqli_select_db($conn,$db);


if(isset($_POST['sub'])) {

	$name = $_POST['name'];
    $author = $_POST['author'];
    $publication = $_POST['publication'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$category = $_POST['category'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            ;
        } else {
            $warning =  "Sorry, there was an error uploading your file.";
        }
    
    $photo= $_FILES["photo"]["name"];
    echo $qry = "INSERT INTO `tbl_book` (`name`, `author`,`publication`,  `price`, `quantity`, `image`, `category`) VALUES ( '$name', '$author', '$publication' ,'$price', '$quantity', '$photo', '$category');";
    mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
    
        header('location:home.html');
}
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Recipe World</title>
            
    </head>   
    <body>
        
        <div class="content">
            <div class="disp">
                <h2>Add Book</h2>
                <h4> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="" enctype="multipart/form-data">
                Book Name<input type="text" name="name"><br>
                Author<input type="text" name="author"><br>
                Publication<input type="text" name="publication"><br>
                price<input type="text" name="price"><br>
                quantity<input type="text" name="quantity"><br>
                image<input type="file" name="photo" id="photo"><br>
				category<select name="category"> 
						<option value="">---Select---</option>
						<option value="CSE">CSE</option>
						<option value="IT">IT</option>
						<option value="MECH">MECH</option>
				</select><br>
                <input type="submit" name="sub" value="Submit">
            </form>
            </div> 
            
        </div>
    </body>  
</html>