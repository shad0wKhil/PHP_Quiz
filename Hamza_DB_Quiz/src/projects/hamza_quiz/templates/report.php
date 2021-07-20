<?php
    require_once '../config.php';
    function resultsMessage($correctAnsweres) {

    if ($correctAnsweres == 4) {
        echo "What a genius!";
    }
    elseif ($correctAnsweres >= 2) {
        echo "Not bad!";
    }
    else {
        echo "What a loser!";
    }
}



    // Session object: Update number of achieved points
    // var_dump($_POST);
    if (isset($_POST['radio'])) {
        $_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $_POST['radio'];
    }

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
                <h1><a input button type="submit" class="btn" href="index.php">Restart</a></h1>
            <?php
                echo '<p>You have answered ' . $_SESSION['achievedPoints'] .  ' correctly.</p>';
                echo '<p>' . resultsMessage($_SESSION['achievedPoints']) . '</p>';
            ?></span>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>

<?php 
    unset($_SESSION);
    session_destroy();
?>