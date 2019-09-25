<html>
    <head>
        <?php
            include 'mandatory.php';
        ?>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/039E9512-76EF-754D-8573-1FE824111D1C/main.js" charset="UTF-8"></script></head>
    <body>
        <?php
        include 'header.php';
        ?>
        <form method="POST" action="successfullySignedUp.php">
            <div id="sc" class="card col-4 bg-light mx-auto border-dark">
                <div class="card-header">
                    Sign Up
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="fname" placeholder="Enter your name">
                        <small id="name" class="form-text text-muted">
                            Enter your name according to college records.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="birth" placeholder="Enter your date of birth">
                        <small id="DOB" class="form-text text-muted">
                            Enter your DOB in DD/MM/YYYY format.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="clgrl" placeholder="Enter your college roll number">
                        <small id="usernameHelpBlock" class="form-text text-muted">
                            Please do not use any special characters(\%&*).
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="phn" placeholder="Enter your phone number">
                    </div>
                    <div>
                        <input type="submit" value="Sign Up" class="btn btn-dark">
                    </div>
                </div>
                <div class="card-footer">
                    Already have an account? <a class="card-link" href="login.php">Login here</a>
                </div>
            </div>
        </form>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>