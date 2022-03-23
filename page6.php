<!DOCTYPE html>
<html>

<head>
    <title>Question 6 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    
</head>

<body>
    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>

    <div class="text-id">


        <form action="page7.php" method="post" onsubmit="return validateQuestion('number-text');">

            <?php include 'survey-title.php' ?>
            <br>
            <br>
            <p>Question 6:</p>
            <label for="q6"><strong>
                    On a typical day: How many of yours
                    meals or snacks include
                    Carbohydrates?</strong>
            </label><br><br>

            <input type="number" name="number-text" id="number-text" class="" style="max-width: 80px;">


            <input type="hidden" name="lastPageID" value="question-6">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">NEXT</button>
            <a href="page5.php" class="next">PREVIOUS</a>
            <p class="spacer"></p><br>
        </form>

    </div>
    <?php include 'inc/footer.php' ?>

</body>
<script src="/js/validation.js"></script>
</html>