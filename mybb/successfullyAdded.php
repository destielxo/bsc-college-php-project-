<?php
include 'mandatory.php';
include 'header.php';
include 'databaseConnection.php';
?>
<html>
    <body>
        <?php
        $r=$_POST['roll'];
        $n=$_POST['Name'];
        $d=$_POST['dob'];
        $p=$_POST['phnum'];
        $sel_q="INSERT INTO `studentdata`(`CollegeRollNo`, `Name`, `DOB`, `PhoneNo`) VALUES ($r,'$n','$d','$p');";
        $sel_q_result = mysqli_query($connection, $sel_q) OR die(mysqli_error($connection));
        ?>
        <div class="card col-6 bg-light mx-auto border-dark cardMargin">
            <div class="card-body">
                <h5 class="card-title">Successful</h5>
                <p class="card-text">Data uploaded</p>
                <a href="finalYearRolls.php" class="card-link">Upload another data</a>
            </div>
        </div>
    </body>
</html>
<?php
include 'footer.php';
?>