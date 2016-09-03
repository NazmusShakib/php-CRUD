<?php
    session_start();

    //unset()
    unset($_SESSION['SESS_MEMBER_ID']) ;
    unset($_SESSION['SESS_MEMBER_NAME']) ;
    unset($_SESSION['SESS_MEMBER_email']) ;
    
    header("location: index.php");
    exit();    

?>