<?php
    // start session and initialize achieved number of points
    session_start();

    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/include/');

    // Initialize achieved number of points
    $_SESSION['achievedPoints'] = 0;
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
                echo '<a href="/index.php"><h3>Best Quiz Ever<h3></a>'; 
            ?></span>
            <div><center><img src="../images/tenor.gif" style="width: 50%"
            </div>
             <form action="question.php" method="post">
                <input type="hidden" name="questionId" 
                       value="<?php //echo $pageData['questionId']; ?>"> 
                <p><input button type="submit" class="btn" value="START"></button></p>
                
            </span>
            </form>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>