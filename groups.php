<?php
    require_once('partials/header.php');
    require_once('includes/db_conn.php');
    require_once('includes/session_checker.php');

    $sql = 'select * from groups';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>
    <div class="content">
        <h3>Groups</h3>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <?php
                if($count > 0){
                    $sn = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['name']?></td>
                                <td>
                                    <a class="btn btn-success">Reset</a>
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