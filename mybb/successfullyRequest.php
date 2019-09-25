<?php
include 'mandatory.php';
include 'header.php';
include 'databaseConnection.php';
?>
<html>
    <body>
        <?php
        $nm=$_POST['naam'];
        $dt=$_POST['date'];
        $rn=$_POST['rnum'];
        $yr=$_POST['yr'];
        $dn=$_POST['dname'];
        $dc=$_POST['dcon'];
        $sl_q="INSERT INTO `centralqueries`(`Name`, `DOB`, `ClgRoll`, `ClgYear`, `DocName`, `DocContents`) VALUES ('$nm', '$dt', '$rn', '$yr', '$dn', '$dc');";
        $sl_q_result = mysqli_query($connection, $sl_q) OR die(mysqli_error($connection));
        ?>
        <div class="card col-6 bg-light mx-auto border-dark cardMargin">
            <div class="card-body">
                <h5 class="card-title">Successful</h5>
                <p class="card-text">Your request has been registered. Our executives will get to you soon. Kindly keep checking Requests page for updates.</p>
                <a href="finalYearRolls.php" class="card-link">Register another request.</a>
            </div>
        </div>
    </body>
</html>
<?php
include 'footer.php';
?>