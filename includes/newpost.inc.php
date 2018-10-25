<?php 
    echo "

    <form class=\"post-container\" action=\"index.php\" method=\"post\">
        <h1 class=\"post-title\">add new contact</h1>
        <input class=\"post-input\" type=\"text\" name=\"name\" placeholder=\"first name\">
        <input class=\"post-input\" type=\"text\" name=\"lastname\" placeholder=\"last name\">
        <input class=\"post-input\" type=\"text\" name=\"phonenumber\" placeholder=\"phone number\">
        <input class=\"post-input\" type=\"text\" name=\"email\" placeholder=\"email\">
        <input type=\"hidden\" name=\"content\" value=\"addpost\">
        <input class=\"submit\" type=\"submit\" value=\"Submit\">
    </form>";
?>