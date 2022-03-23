<!DOCTYPE html>
<html>

<head>
    <title>Question 2 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
   
</head>

<body>

    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>

    <div class="text-id">

        <?php include 'inc/survey-title.php' ?>
        
        <p>Question 2:</p>
        <p><strong>Do you take dietary supplements?</strong></p><br>

        <form action="page3.php" method="post" onsubmit="return validateRadio('single-choice');">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
                <label class="form-check-label" for="single-choice-0">
                    No
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
                <label class="form-check-label" for="single-choice-1">
                    Yes
                </label>
            </div><br>

            <input type="hidden" name="lastPageID" value="question-2">
            <p id="validation-warning" class="warning"></p>

            <p class="spacer"></p>
            
            <button type="submit" class="next">NEXT</button> 
            <a href="index.php" class="next">PREVIOUS</a>
    
            <br><br>
        </form>

    </div>

    <?php include 'inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>
</html>