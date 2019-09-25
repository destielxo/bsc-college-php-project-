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
        <form method="POST" action="successfullyAdded.php">
            <div class="card col-4 bg-light mx-auto border-dark cardMargin">
                <div class="card-header">
                    Final Year Students Data
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="roll" placeholder="Enter college roll number">
                        <small id="usernameHelpBlock" class="form-text text-muted">
                            Please do not use any special characters(\%&*).
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="Name" placeholder="Enter name">
                        <small id="pwdHelpBlock" class="form-text text-muted">
                            Prefer to input in CAPITALS only.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="dob" placeholder="Enter DOB">
                        <small id="pwdHelpBlock" class="form-text text-muted">
                            Use format DD/MM/YYYY.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="phnum" placeholder="Enter phone number">
                    </div>
                    <div>
                        <input type="submit" value="Upload" class="btn btn-dark">
                    </div>
                </div>
                <div class="card-footer">
                    <p align="center">Welcome to Online Document Generation Portal</p>
                </div>
            </div>
        </form>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>