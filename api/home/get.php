<?php

    if ($_POST["model"] !== ""){
        $x = "WHERE `model`='{$_POST['model']}'";
    } else {
        $x = "";
    }

    // echo $_POST['model'];

    require "../../core.php"; 

    $res = $db->query( " SELECT * FROM `phones` $x " );
    
    /* print_r($db); */

    echo sql_to_arr($res);