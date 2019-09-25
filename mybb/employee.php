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
        <form method="GET" action="afterEmployeeLogin.php">
            <div class="card col-4 bg-light mx-auto border-dark cardMargin">
                <div class="card-header">
                    Employee Log In
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="sel1">Select the year you represent</label>
                        <select class="form-control" id="sel1" name="year">
                            <option>-Select One-</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="pwd" placeholder="Password">
                        <small id="pwdHelpBlock" class="form-text text-muted">
                            Your password is your office password provided to you at the time of the joining.
                        </small>
                    </div>
                    <div>
                        <input type="submit" value="Log in" class="btn btn-dark">
                    </div>
                </div>
                <div class="card-footer">
                    New User? <a class="card-link" href="login.php">Sign Up here</a><br>
                    Student? <a class="card-link" href="login.php">Log In Here</a>
                </div>
            </div>
        </form>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>