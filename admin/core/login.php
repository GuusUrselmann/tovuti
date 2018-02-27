<?php
function loginCheck() {
    if(isset($_POST['login_submit'])) {
        global $wfdb;

        if(!empty($_POST['login_username']) && !empty($_POST['login_password'])) {
            $submit_name = $_POST['login_username'];
            $submit_pass = $_POST['login_password'];

            $table_name = 'users';
            $sql = "SELECT * FROM $table_name WHERE user_name = '$submit_name'";
            $user = $wfdb->get_row($sql);
            if(!empty($user) && $submit_pass == $user['user_pass']) {
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['user_level'] = $user['user_level'];
            }
            else {
                echo 'wrong username / password';
            }
        }
        else {
            echo 'Please fill out the given fields';
        }
    }
}

function logoutCheck() {
    if(isset($_POST['logout_submit'])) {
        session_destroy();
        $_SESSION['user_logged_in'] = false;
        $_SESSION['user_level'] = 0;
    }
}

/*
LINE 12: CHANGE SUBMIT_PASS into SUBMIT_PASS_HASHED
*/
