<?php

function getuserbyID($user_id = NULL) {
    if(isset($user_id)) {
        global $wfdb;

        $table_name = 'users';
        $sql = "SELECT * FROM $table_name WHERE user_id = '$user_id'";
        $user = $wfdb->get_row($sql);
    }
}
