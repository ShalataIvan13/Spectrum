<?php 

    $db = new mysqli("localhost", "root", "", "shop");

    /* if ($db->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
    } */

    function sql_to_arr($sql) {
        $output = [];
        while($row = $sql->fetch_assoc()) {
            $output[] = $row;
        }
        return json_encode($output, JSON_UNESCAPED_UNICODE);
    }