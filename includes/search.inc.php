<?php 
include_once('function.php');

$search_query = $_GET['searchFor'];

$words = explode(" ", $search_query);

$search_phrase = implode("'% AND TITLE LIKE '%", $words);
$query = "SELECT phonenumber, name, lastname from contact WHERE name like'$search_phrase' OR lastname like'$search_phrase'";

$result = connectToDb($query);

if(mysql_num_rows($result) == 0){
    echo "There are no contacts under that name";
}else{
    while($row = mysql_fetch_array($result)){
        $phonenumber = $row['phonenumber'];
        $name = $row['name'];
        $lastname = $row['lastname'];

        echo "<div class=\"result-cont\">
                <a href=\"index.php?content=showpost&id=$phonenumber\">$name, $lastname</a>
            </div>";
    }
}

?>