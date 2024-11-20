<?php
include "../../../ADMIN/absolute_root_path.php";
session_start();
// session_destroy();   
// var_dump($_POST);
if(isset($_POST['confirm_logout'])) {
    if($_POST['confirm_logout'] == 'Yes') {
        session_destroy();
        header(header: "Location: " . $absolute_root_path . "/index.php");
        exit();
    }else {
        header(header: "Location: ../../NAV/PROFILE/profile.php");
        exit();
    }
}
?>