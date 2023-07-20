<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sts";

// create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM contact";
$resurt = mysqli_query($conn, $sql);

echo '<table border="1" cellspacing="0" cellpadding="0">
   <tr>
    <td> id</td>
    <td> fullname </td>
    <td> email </td> 
    <td> message </td>

  </tr>';

if ($result){
    while ($row = $resurt->fetch_assoc()){
        $field1namerow["id"];
        $field2name = $row["fullname"];
        $field3name = $row["email"];
        $field4name = $row["message"];


        echo '<tr>
                 <td>'.$field1name.'</td>
                 <td>'.$field2name.'</td>
                 <td>'.$field3name.'</td>
                 <td>'.$field4name.'</td>

            </tr>';
    }
    $result->free();
}
if (mysqli_num_rows($result) > 0) {
    //output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "-name: " . $row["fullname"]. " " . $row["email"]. " " . $row["message"]."<br>";
    }
}else {
    echo "0 results";
}
 mysqli_close($conn);
 ?>






















?>
