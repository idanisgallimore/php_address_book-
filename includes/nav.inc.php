<?php 
   echo 
   "<ul class='nav-bar'>
        <li class='nav-items'><a class='nav-links' href='index.php'>Home</a></li> 
        <li class='nav-items'><a class='nav-links' href='index.php?content=login'>Login</a></li> 
        <li class='nav-items'><a class='nav-links' href='index.php?content=newpost'>Add New Contact</a></li>
        <li class='nav-items'><a class='nav-links' href='index.php?content=list'>View Contact</a></li>  
   </ul>
   <form  class='nav-form' action='index.php' method='get'>
        <input class='search-field' name='searchFor' type='text' placeholder='Search for contact' />
        <input class='button' name='goButton' type='submit' value='find' />
        <input name='content' type='hidden' value='search' />
    </form>";
?>