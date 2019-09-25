<html>
    <head>
        <?php
            include 'mandatory.php';
        ?>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/039E9512-76EF-754D-8573-1FE824111D1C/main.js" charset="UTF-8"></script></head>
    <body>
        <?php
            include 'employeeHeader.php';
        ?>
        <table class="table table-bordered table-striped table-hover table-danger">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" >Date of Request</th>
                    <th scope="col">Document</th>
                    <th scope="col">View Template</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Approve</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1<sup>st</sup> January, 2018</td>
                    <td>Bonafide Certificate</td>
                    <td>Blank</td>
                    <td>Blank</td>
                    <td>Blank</td>
                    <td>
                        <input type="submit" value="Approve" class="btn btn-danger">
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
