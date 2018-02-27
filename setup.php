<?php

/**Load in classes**/
require(ABSPATH.'admin/classcompiler.php');


/**Creating db class**/
$wfdb = new wfdb();
$user = new User();
$router = new Router();
$wfweb = new wfweb();

/**Logincheck for user**/
include(ABSPATH.'admin/core/login.php');
include(ABSPATH.'admin/core/user.php');

logoutCheck();
loginCheck();

/**Open the contents of the page**/
require(ABSPATH.'public/content.php');
