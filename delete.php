<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sifa";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
//sql to delete a record
$sql = "DELETE FROM contact WHERE id= $id";
if (mysqli_query($conn, $sql)){
    header("location:report.php")}
    else{
        echo "Error deleting record:" . mysql_error($conn);
    }
    mysqli_close($conn);
    ?>
