<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname = "employee_db";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    else   
        echo "Successfully Connected<br>";
    
    
    $qry = "CREATE TABLE `employee_tbl` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `fname` varchar(100) DEFAULT NULL,
        `lname` varchar(100) DEFAULT NULL,
        `salary` int(5) DEFAULT NULL,
        `date_inseted` timestamp NOT NULL DEFAULT current_timestamp()
      );";
    
    $res = mysqli_query($conn, $qry);
    if(!$res)
    {
        echo "Table not created";
    } else {
        echo "Table created";
    }

$qry1 = "INSERT INTO `employee_tbl` ( `fname`, `lname`, `salary`) VALUES
('Bhargav', 'Kiran', 20000);";

$res1 = mysqli_query($conn, $qry1);
if(!$res1)
{
    echo "<br>Row not inserted";
} else {
    echo "<br>Row inserted";
}



    if($_SERVER['REQUEST_METHOD']=="POST") {
        echo $_POST['uname'];
        echo "<br>";
        echo $_POST['pass'];
    }
?>
<html>
    <body>
        <form method = "post" action = "">
            User Name: <input type="text" name="uname"><br>
            Password:  <input type="password" name="pass"><br>
            <input type="submit" name="Submit">
        </form>
    </body>
</html>