<!DOCTYPE html>
<html>

<head>
    <title>Question 9 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>

</head>

<body>
    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>

    <div class="text-id">

        <form action="page10.php" method="post" onsubmit="return validateQuestion('number-text');">

            <?php include 'survey-title.php' ?>
            <br>
            <br>

            <p>Question 9:</p>
            <label for="q9"><strong>On a typical day: How many of your
                    meals or snacks contain fruits?</strong></label><br><br>
            <input type="number" name="number-text" id="number-text" class="" style="max-width: 80px;">

            <input type="hidden" name="lastPageID" value="question-9">
            <p id="validation-warning" class="warning"></p>

            <br>
            
            <button type="submit" class="next">NEXT</button>
            <a href="page8.php" class="next">PREVIOUS</a>
            <p class="spacer"></p><br>
        </form>

    </div>
    <?php include 'inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>

</html>