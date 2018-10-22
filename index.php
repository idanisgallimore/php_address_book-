<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" type="text/css" href="assets/style.css" />
    <title>My Address Book</title>
</head>
<body>
    <div class="nav">
    <!-- Remember to make it go away when you log in -->
        <?php include("includes/nav.inc.php"); ?>
    </div>
    <div class="main">
        <?php 
            if(!isset($_REQUEST['content'])){
                include("includes/main.inc.php");
            }else{
                $content = $_REQUEST['content'];
                $nextpage = "includes/".$content.".inc.php";
                include($nextpage);
            }
        ?>
    </div>
    <div class="footer">
    <!-- Remember to make it go away when you log in -->
        <?php include("includes/footer.inc.php"); ?>
    </div>
</body>
</html>