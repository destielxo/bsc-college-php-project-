<html>
    <head>
        <?php
            include 'mandatory.php';
        ?>
        <?php
            if (isset($_SESSION['roll'])) 
            {
                header('location: welcome.php');
            }
        ?>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/039E9512-76EF-754D-8573-1FE824111D1C/main.js" charset="UTF-8"></script></head>
    <body>
        <?php
        include 'header.php';
        ?>
        <form method="POST" action="loginSubmit.php">
            <div class="card col-4 bg-light mx-auto border-dark cardMargin">
                <div class="card-header">
                    Log In
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="roll" placeholder="User Name">
                        <small id="usernameHelpBlock" class="form-text text-muted">
                            Your username is your college roll number. Please do not use any special characters(\%&*).
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="dob" placeholder="Password">
                        <small id="pwdHelpBlock" class="form-text text-muted">
                            Your password is your date of birth. Use format DD/MM/YYYY.
                        </small>
                    </div>
                    <div>
                        <input type="submit" value="Log in" class="btn btn-dark">
                    </div>
                </div>
                <div class="card-footer">
                    New User? <a class="card-link" href="signup.php">Register here.</a><br>
                    Employee? <a class="card-link" href="employee.php">Log In Here</a>
                </div>
            </div>
        </form>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>