<?php 
    echo "<h1>add new contact</h1>

    <form class=\"post-container\" action=\"index.php\" method=\"post\">
        <input class=\"post-input\" type=\"text\" name=\"name\" placeholder=\"first name\">
        <input class=\"post-input\" type=\"text\" name=\"lastname\" placeholder=\"last name\">
        <input class=\"post-input\" type=\"text\" name=\"phonenumber\" placeholder=\"phone number\">
        <input class=\"post-input\" type=\"text\" name=\"email\" placeholder=\"email\">
        <input type=\"hidden\" name=\"addpost\">
    </form>";
?>