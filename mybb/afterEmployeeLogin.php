<?php
    include 'mandatory.php';
    //include 'employeeHeader.php';
    include 'databaseConnection.php';
?>
<?php
    $year = $_GET['year'];
    $pwd = $_GET['pwd'];
    $query = "SELECT Password FROM employeedata WHERE EmployeeYear='$year';";
    $query_result = mysqli_query($connection, $query) OR die(mysqli_error($connection));
    while ($row = mysqli_fetch_assoc($query_result))
    {
        echo $row["Password"]."<br>";
    }
    
?>
