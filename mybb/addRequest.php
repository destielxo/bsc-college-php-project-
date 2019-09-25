<?php
include 'mandatory.php';
?>
<html>
    <body>
        <nav class="navbar sticky-top navbar-fixed-top navbar-dark bg-dark">
            <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <img src="logo.png" alt="">Online Document Generation Portal
                </a>
            </div>
            <div>
                <ul class="nav justify-content-end nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="addRequest.php">Add a new Request</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Requests</a></li>
                </ul>            
            </div>
            </div>
        </nav>
        <form class="cardMargin" method="GET" action="successfullyRequest.php">
            <div id="sc" class="card col-4 bg-light mx-auto border-dark">
                <div class="card-header">
                    Add a Request
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="naam" placeholder="Enter your name">
                        <small id="name" class="form-text text-muted">
                            Enter your name according to college records.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="date" placeholder="Enter your date of birth">
                        <small id="DOB" class="form-text text-muted">
                            Enter your DOB in DD/MM/YYYY format.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="rnum" placeholder="Enter your college roll number">
                        <small id="usernameHelpBlock" class="form-text text-muted">
                            Please do not use any special characters(\%&*).
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select course year</label>
                        <select class="form-control" id="sel1" name="yr">
                            <option>-Select One-</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="dname" placeholder="Enter document Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="dcon" placeholder="Enter the content of the document">
                        <small id="usernameHelpBlock" class="form-text text-muted">
                            Enter the text that you want to be displayed on your document.
                        </small>
                    </div>
                    <div>
                        <input type="submit" value="Sign Up" class="btn btn-dark">
                    </div>
                </div>
            </div>
        </form>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>