<?php
    include 'databaseConnection.php';
    include 'mandatory.php';
?>
<html>
    <body class="brd">
        <h3 align="right">Shyama Prasad Mukherji College</h3>
        <h3 align="right">(University of Delhi)</h3>
        <h4 align="right">Road no. 57, Punjabi Bagh West</h4>
        <h4 align="right">New Delhi, Delhi-110026</h4>
        <h4 align="right">Email: spmcollegedu@gmail.com</h4>
        <hr>
        <h4>
            Date: 
            <?php
                echo date("l")." ". date("d-m-Y");
            ?>
        </h4>
        <br>
        <h2 align="center"><u>TO WHOMSOEVER IT MAY CONCERN</u></h2>
    
    <?php
        $ro=$_POST['roll'];
        $qu = "SELECT Name FROM studentdata WHERE CollegeRollNo='$ro';";
        $qu_result = mysqli_query($connection, $qu) OR die(mysqli_error($connection));
        $rw = mysqli_fetch_assoc($qu_result);
        $name = $rw["Name"];
        $d=date("Y")-1;
        $e=date("Y");
        $year=$d." - ".$e;

        echo "<center>";
        echo nl2br("This is to certify that Miss ".$name.", has been a bonafide student of this institution. Her code of conduct in the academic year ".$year." has been GOOD.
        Miss ".$name." bears a good moral character and to the best of my knowledge, is not involved in any criminal activity and no legal case is pending against her.");
        echo "</center>";
    ?>
        <br>
        <br>
        <p>Sincerely,<br></p>
        <img src="signatures.png"alt="Signature">
        <br>
        <p>Dr. Sadhna Sharma<br>(Officiating Principal)<br></p>
    </body>
</html>