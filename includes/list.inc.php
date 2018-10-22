<h2 id="list-title">all your contacts</h2>
<?php 
    $con = @mysql_connect('localhost', 'test2', 'test2') or die("did not sql connect");
    mysql_select_db("address_book", $con) or die("did not select db");

    $query = "SELECT contactid, fname, lname, number, email from contact";
    $result = mysql_query($query);

    if(mysql_num_rows($result) === 0){
        echo "<h2 id=\"list-title\">There are no contacts</h2>";
    }else{
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $contactid = $row['contactid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $number = $row['number'];
            $email = $row['email'];
        }
    }

?>