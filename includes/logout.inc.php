<?php 
    if(isset($_SESSION['valid_user'])){
        session_destroy();
        header("Location: http://localhost/addressbook/index.php?content=main");
        // echo "You are now logged out";
        exit;
    }
?>