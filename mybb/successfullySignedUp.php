<?php
include 'mandatory.php';
include 'header.php';
include 'databaseConnection.php';
?>
<html>
    <body>
        <?php
        $f=$_POST['fname'];
        $b=$_POST['birth'];
        $c=$_POST['clgrl'];
        $ph=$_POST['phn'];
        $que="INSERT INTO `studentdata`(`CollegeRollNo`, `Name`, `DOB`, `PhoneNo`) VALUES ($f,'$b','$c','$ph');";
        $que_result=mysqli_query($connection, $que) OR die(mysqli_error($connection));
        ?>
        <div class="card col-6 bg-light mx-auto border-dark cardMargin">
            <div class="card-body">
                <h5 class="card-title">Successful</h5>
                <p class="card-text">You've successfully signed up. Login to proceed</p>
                <a href="login.php" class="card-link">Login Here</a>
            </div>
        </div>
    </body>
</html>
<?php
include 'footer.php';
?>