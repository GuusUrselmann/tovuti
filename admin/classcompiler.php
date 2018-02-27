<?php

/**Paths to all classes, add a path to load the class**/
$classpaths = array(
    'wfdb.class.php',
    'router.class.php',
    'user.class.php',
    'wfweb.class.php'
);

/**Compiling and making the classes accessible**/
foreach($classpaths as $path) {
    include(ABSPATH.$path);
}
