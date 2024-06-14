<?php
    ini_set("post_max_size", '1000M');
    ini_set("upload_max_size", '2000M');

    $attachment = $_FILES['attachment']['name'];

    print_r($attachment);
?>