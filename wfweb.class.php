<?php

class wfweb {

    /**Page variables**/
    public $page_title = 'paginatitel';

    public function user_logged_in() {
        if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']) {
            return true;
        }
        else {
            return false;
        }
    }

    public function user_level($level, $select) {
        switch($select) {
            case "more":
                if($this->user_logged_in() && $_SESSION['user_level'] >= $level) {
                    return true;
                }
                else {
                    return false;
                }
                break;

            case "less":
                if(user_logged_in() && $_SESSION['user_level'] <= $level) {
                    return true;
                }
                else {
                    return false;
                }
                break;

            case "exact":
            if(user_logged_in() && $_SESSION['user_level'] == $level) {
                return true;
            }
            else {
                return false;
            }
            break;

            default:
            if(user_logged_in() && $_SESSION['user_level'] == $level) {
                return true;
            }
            else {
                return false;
            }
        }

    }

    /**Meta info**/
    public function meta_info() {
        ?>
        <title><?= $this->page_title ?></title>
        <?php
    }

    /**Meta css**/
    public function meta_css()  {
        ?>
        <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./public/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="./public/assets/fonts/fontmanager.css" type="text/css" rel="stylesheet">
        <link href="./public/assets/css/static.css" type="text/css" rel="stylesheet">
        <link href="./public/assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="./public/assets/css/header.css" type="text/css" rel="stylesheet">
        <?php
    }

    /**Meta js**/
    public function meta_js()  {
        ?>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script><?php include(ABSPATH.'public/assets/js/materialize.js');?></script>
        <script><?php include(ABSPATH.'public/assets/js/init.js');?></script>
        <?php
    }

    public function pagemeta() {
        $this->meta_info();
        $this->meta_css();
        $this->meta_js();
    }

    public function header() {
        include(ABSPATH.'admin/build/header.php');
    }

    public function footer() {
        include(ABSPATH.'admin/build/footer.php');
    }

    public function sidebar() {
        global $wfweb;
        include(ABSPATH.'admin/build/sidebar.php');
    }

    public function widget($wname) {
        switch($wname) {
            case "w1":
                include(ABSPATH.'admin/widgets/w1.php');
                break;
        }
    }
}
