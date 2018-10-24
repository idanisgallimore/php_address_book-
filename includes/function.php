<?php 
    function connectToDb($query){
        $con = @mysql_connect('localhost', 'idanis', 'idanis') or die("did not sql connect".mysql_error());
        mysql_select_db("address_book", $con) or die("did not select db".mysql_error());
        $result = mysql_query($query) or die("Query not returned".mysql_error());
        return $result;
    }


?>