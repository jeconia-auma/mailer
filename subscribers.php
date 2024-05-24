<?php
    require_once('partials/header.php');
    require_once('includes/db_conn.php');

    //sql query
    $sql = "select * from subscribers";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
    $sn = 1;
    ?>
        <div class="content">
            <h3>Subscribers</h3>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
    <?php
        if($count > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo($sn); ?></td>
                        <td><?php echo($row['email']); ?></td>
                        <td>
                            <a class="btn btn-success">update</a>
                            <a href="" class="btn btn-warning">Unsubscribe</a>
                            <a class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php
                $sn++;
            }
        }
    ?>
        </table>
    </div>
<?php require_once('partials/footer.php'); ?>