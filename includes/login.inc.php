<?php 
    echo "<form class=\"post-container\" action=\"index.php\" method=\"post\">
        <h1 class=\"post-title\">Login</h1>
        <input class=\"post-input\" type=\"text\" name=\"username\" placeholder=\"username\">
        <input class=\"post-input\" type=\"text\" name=\"password\" placeholder=\"password\">
        <input type=\"hidden\" name=\"content\" value=\"validatelogin\">
        <input class=\"submit\" type=\"submit\" value=\"Submit\">
    </form>";
?>