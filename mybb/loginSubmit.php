<?php
require 'databaseConnection.php';
?>
?>
<?php
$rollNum =$_POST['roll'];
$pwd=$_POST['dob'];
$select_query = "SELECT `DOB` FROM `studentdata` WHERE CollegeRollNo='$rollNum';;";

$select_query_result = mysqli_query($connection, $select_query) or die(mysqli_error($connection));
if((mysqli_num_rows($select_query_result))==0)
{
    echo "Incorrect username or password";
}
else
{
    $row= mysqli_fetch_assoc($query_result);
    $_SESSION['roll'] = $rollNum;
    $_SESSION['id'] = mysqli_insert_id($connection);
     
}
?>
<?php
if (isset($_SESSION['roll'])) {
 header('location: welcome.php');
}