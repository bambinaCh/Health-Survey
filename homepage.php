<!DOCTYPE html>
<html>

<head>
    <title>Survey on Nutrition, Fitness and Sport</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    
</head>

<body>
    <?php
    session_start();
    session_destroy(); ?>

    <?php include 'inc/header.php' ?>
   

    <div class="title-hp">
        <p><strong>Know how healthy you are with the EMR Survey!</strong> </p>
    </div>

    <div class="text-hp">
        <p>Answer 10 easy questions and we will give you your personalized Feedback</p><br>
        <p>Have fun!! &#128512; </p>
    </div>
    <div class="survey-button">
        <a class="survey-button-text" href="index.php"><strong>GO TO SURVEY</strong></a>
    </div>
    <br>

    
    <?php include 'inc/footer.php' ?> 
    
</body>

<script src="/js/validation.js"></script>
</html>