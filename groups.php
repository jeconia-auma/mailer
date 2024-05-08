<?php
    require_once('partials/header.php');
    require_once('includes/session_checker.php');
?>
    <div class="content">
        <h3>Groups</h3>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>ID</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>36149028</td>
                <td>0708301830</td>
                <td>jeconiaauma@gmail.com</td>
                <td>
                    <a class="btn btn-success">Reset</a>
                    <a class="btn btn-danger">delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Doe</td>
                <td>36149029</td>
                <td>0708441709</td>
                <td>jauma@kinyanjuitechnical.ac.ke</td>
                <td>
                    <a class="btn btn-success">Reset</a>
                    <a class="btn btn-danger">delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>James Doe</td>
                <td>36149030</td>
                <td>0708100169</td>
                <td>okothjeconiaauma@gmail.com</td>
                <td>
                    <a class="btn btn-success">Reset</a>
                    <a class="btn btn-danger">delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>June Doe</td>
                <td>36149031</td>
                <td>0754590350</td>
                <td>jeconiaauma@proton.me</td>
                <td>
                    <a class="btn btn-success">Reset</a>
                    <a class="btn btn-danger">delete</a>
                </td>
            </tr>
        </table>
    </div>
<?php require_once('partials/footer.php'); ?>