<?php 
include_once("function.php");
    $id = $_GET['id'];
    $query = "DELETE from contact WHERE phonenumber = '$id'";
    $result = connectToDb($query);
    if($result){
        echo "Contact deleted";
    }else{
        echo "fail";
}

?>