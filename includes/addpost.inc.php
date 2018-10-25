<?php 
include_once("function.php");

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];

    $badpost = 0;

    if(trim($name) == ""){
        echo "<h2>Must add name!</h2>\n
        <a class=\"goback\" href=\"index.php?content=newpost\">go back!</a>";
        $badpost = 1; 
    }
    if(trim($lastname) == ""){
        echo "<h2>must add last name</h2>\n
        <a class=\"goback\" href=\"index.php?content=newpost\">go back!</a>";
        $badpost = 1; 
    }
    if(trim($phonenumber) == ""){
        echo "<h2>must add phonenumber</h2>\n
        <a class=\"goback\" href=\"index.php?content=newpost\">go back!</a>";
        $badpost = 1; 
    }
    if(trim($email) == ""){
        echo "<h2>must add email</h2>\n
        <a class=\"goback\" href=\"index.php?content=newpost\">go back!</a>";
        $badpost = 1; 
    }
    //make sure phonenumber stays unique

    $query = "SELECT phonenumber from contact WHERE phonenumber = '$phonenumber'";
    $result = connectToDb($query);
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    $phonenumber2 = $row['phonenumber'];
    if($phonenumber2 === $phonenumber && $phonenumber2 != null){
        echo "<h2>that phone number is already listed!</h2>\n
        <a class=\"goback\" href=\"index.php?content=newpost\">go back!</a>";
        $badpost = 1; 
    }

    if($badpost != 1){
        $query = "INSERT into contact(phonenumber, name, lastname, email) VALUES('$phonenumber', '$name', '$lastname', '$email')";
        $result = mysql_query($query) or die("did not add contact listing ".mysql_error());
        if($result){
            echo "<h2>Listing has been added.</h2>";
            exit;
        }else{
            echo "<h2>listing not added</h2>";
        }
    }

?>