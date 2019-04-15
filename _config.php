<?php
    defined("INCS_PATH")
        or define("INCS_PATH", dirname(__FILE__));
    $siteDomain = "http://jk-keller.com";
    $siteDomain = "http://localhost:8000";

    session_start();
    if ( !isset($_SESSION['flagColor']) ) {
        $_SESSION['flagColor'] = 2; // 2 = shadow, 3 = color
    } else {
        // $_SESSION['flagColor'] = 1; // 2 = shadow, 3 = color
    }
    $flag_color = $_SESSION['flagColor'];

    require_once(INCS_PATH."/_functions.php");
    require_once(INCS_PATH."/0__0/_the_projects_list.php");
?>
