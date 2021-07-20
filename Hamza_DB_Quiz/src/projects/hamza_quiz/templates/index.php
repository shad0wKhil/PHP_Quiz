<?php
    require_once '../config.php';
    session_destroy();
    //echo $_SERVER['DOCUMENT_ROOT'];
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/include/');


  
?>
<?php include("header.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="bgimg-1">
        <div class="caption">
            <span class="border">
            <?php 
                echo '<a href="introduction.php">CLICK ME</a>'; 
            ?>
            </span>
        <a href="introduction.php"><center><p><img src="/images/cool.gif" style="width: 30%"</a>
    </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>