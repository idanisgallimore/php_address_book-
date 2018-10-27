<?php 
// The function that connects to the db
include_once("function.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

        // it is better to add the PASSWORD function to query to hash it!
    $query = "SELECT username from users where username = '$username' and password = '$password'";

    $result = connectToDb($query);

    if(mysql_num_rows($result) == 0){
        echo "<h2>login fail</h2>\n
        <a class=\"goback\" href=\"index.php?content=login\">go back!</a>";
    }else{
        $_SESSION['valid_user'] = $username;
        echo "<h2>you are logged in</h2>\n
        <a class=\"goback\" href=\"index.php?content=main\">home</a>";
    }

?>