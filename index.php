<?php
// This file is the base for all pages in the site. When creating a new page, 
// we just open this one, then save a copy as the new page.
    include("db/top.inc.php");
?>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Welcome to our shop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <?php
            include("header.php");
        ?>
        <div class="maincontent">
            <?php
                if(!isset($_GET['page'])) {
                    //include("home.php");
                } else {
                    $page=$_GET['page'];
                    include($page . '.php');
                }
            ?>
            
        </div> 
    </div>
</body>
</html>
