<?php
session_start();


    if (isset($_SESSION['user_id'])) {

        session_unset(); 
        session_destroy();

        echo '<script>alert("ออกจากระบบแล้ว");</script>';
    }

    header('Location: home.php');
    exit;
?>
