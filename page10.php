<!DOCTYPE html>
<html>

<head>
    <title>Question 10 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    
</head>

<body>
    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>

    <div class="text-id">
        
        <form action="result.php" method="post" onsubmit="return validateQuestion('number-text');">

            <?php include 'survey-title.php' ?>
            <br>
            <br>
            <p>Question 10:</p>
            <label for="q10">
                <strong>On a typical day: How many of your
                    meals come out of the microwave
                    or are already prepared?</strong>
            </label><br><br>
            <input type="number" name="number-text" id="number-text" class="" style="max-width: 80px;">


            <input type="hidden" name="lastPageID" value="question-10">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">SUBMIT</button>
            <a href="page9.php" class="next">PREVIOUS</a>
            <p class="spacer"></p>
        </form>
    </div>
    <?php include 'inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>
</html>