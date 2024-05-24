<?php
    ini_set('post_max_size', '1024M');
    $attach = $_FILES['attachment']['name'];
    foreach($attach as $t => $x){
        echo "$attach[$t]";
    }
?>