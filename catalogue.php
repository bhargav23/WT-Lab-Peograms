<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"db_shop");

?>

<html>
    <body bgcolor="grey">
    <table  border="2" width="100%" height="50%">
    <tr>
    <th>cover page</th>
    <th>Author Name</th>
    <th>Publications</th>
    <th>Price</th>
    <th>Add To Cart </th>
    </tr>

    <?php
    $qry = "SELECT * FROM tbl_book";
    $sql=mysqli_query($conn,$qry);
    if(mysqli_num_rows($sql)>0) {
    while($row=mysqli_fetch_assoc($sql)) 
    {
    ?> 
    <tr>
    <td><img src="uploads/<?php echo $row['image']; ?>" height="120" width="100"></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['publication']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td>
        <form method="post" name="form1">
                <input type="button" value="Add to cart">
        </form>
    </td>
    </tr>
    <?php } } else { ?>
    <tr>
    <td>No Books</td>
    </tr>
    <?php } ?>
    </table>
    </html>
    