<?php
    require_once '../config.php';


    // $quizData = qchris_data();

    // Get the ID of the question from the post object
    // Get the question data for the given ID
    if (isset($_POST['questionId'])) {
        $questionID = $_POST['questionId'];
        $pageData = 'result.php';
    }

    // Session object: Update number of achieved points
    // var_dump($_POST);
    if (isset($_POST['radio'])) {
        $_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $_POST['radio'];
    }

    if(!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } elseif($_SESSION['counter']+1 ==  count($questions)) {
        header('Location: report.php');
    } else {
        $_SESSION['counter']++;
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
            </span>
            <form action="check.php" method="post">


                <div>
                    
                <?php 
                
            echo $questions[$_SESSION['counter']]['text'] . '<br>';
            $id = $_SESSION['counter'];
            $query  = $connection->query("SELECT * FROM answers");
            $answers = $query->fetchAll(PDO::FETCH_ASSOC);
            $x=0;
            foreach ($answers as $answer) {
                if($answer['questionId'] == $questions[$_SESSION['counter']]['id']) {
                   // echo '<br>';
                    echo '<input type="radio" id="answer'. $x .'" name="radio" value="'. $answer['isCorrect'] .'" checked >';    
                    echo '<label class="answers" for="answer'. $x .'">' . $answer['text'] . '</label><br>';
                    $x++;
                }
            }
                ?> 

                </div>
                    <input type="hidden" name="questionId" 
                      value="<?php echo 'q' . $_SESSION['counter'];?>"> 
                    <p><input button type="submit" class="btn" value="NEXT"></p>
            
            </form>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>