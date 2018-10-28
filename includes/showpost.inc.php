<?php 
include_once("function.php");
    $id = $_GET['id'];
    $query = "SELECT phonenumber, name, lastname, email from contact WHERE phonenumber = '$id'";
    $result = connectToDb($query);
    $row = mysql_fetch_array($result, MYSQL_ASSOC) or die("Could not fetch array");

    $phonenumber = $row['phonenumber'];
    $name = $row['name'];
    $lname = $row['lastname'];
    $email = $row['email'];

    echo "<div class=\"listing\">
        <h2 class=\"name listf\">$lname, $name</h2>
        <h3 class=\"phonenumber listf\">$phonenumber</h3>
        <h3 class=\"email listf\">$email</h3>
        <a class=\"goback\" href=\"index.php?content=list\">go back!</a>
        <a class=\"goback\" href=\"index.php?content=delete&id=$phonenumber\">delete</a>
    </div>";


?>