<?php 
include_once("function.php");
    $query = "SELECT phonenumber, name, lastname, email from contact ORDER BY lastname";
    $result = connectToDb($query);
    if(mysql_num_rows($result) == 0){
        echo "<h2 id=\"list-title\">There are no contacts</h2>";
    }else{
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $phonenumber = $row['phonenumber'];
            $name = $row['name'];
            $lastname = $row['lastname'];
            $email = $row['email'];

            echo "<div class=\"list-cont\">
                <h2 id=\"list-title\">all your contacts</h2>
                <a class=\"contact-title\" href=\"index.php?content=showpost&id=$phonenumber\"> $lastname, $name</a>
            </div>";
        }
    }

?>