<?php
    SESSION_START();

    //check session varibale and get access

    if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')){
    
        header("location: login.php");
        exit();
    
    }

?>