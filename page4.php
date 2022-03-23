<!DOCTYPE html>
<html>

<head>
    <title>Question 4 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>
    <div class="text-id">
        <form action="page5.php" method="post" onsubmit="return validateCheckboxes();">

            <?php include 'survey-title.php' ?>
            <br>
            <p>Question 4:</p>
            <label for="q4"><strong>What additional physical activity
                    do you operate the most?</strong></label><br><br>

            <input type="checkbox" id="No-activity" name="No-activity" value="0">
            <label for="No-activity"> No add. physical activity </label><br>

            <input type="checkbox" id="lifting-weights" name="Lifting-weights" value="1">
            <label for="Lifting-weights"> Lifting weights</label><br>

            <input type="checkbox" id="Walking" name="Walking" value="1">
            <label for="Walking"> Walking</label><br>

            <input type="checkbox" id="Jogging" name="Jogging" value="1">
            <label for="Jogging"> Jogging </label><br>
            
            <input type="checkbox" id="Running" name="Running" value="1">
            <label for="Running"> Running </label><br>

            <input type="checkbox" id="Swimming" name="Swimming" value="1">
            <label for="Swimming"> Swimming </label><br>

            <input type="checkbox" id="Dancing" name="Dancing" value="1">
            <label for="Dancing"> Dancing </label><br>

            <input type="checkbox" id="Aerobics" name="Aerobics" value="1">
            <label for="Aerobics"> Aerobics </label><br>

            <input type="checkbox" id="q45" name="Pilates" value="1">
            <label for="Pilates"> Pilates </label><br>

            <input type="checkbox" id="Team-Sports" name="Team-Sports" value="1">
            <label for="Team-Sports"> Team Sports </label><br>

            <input type="checkbox" id="Other" name="Other" value="1">
            <label for="Other"> Other </label>
            
            <br>

            <input type="hidden" name="lastPageID" value="question-4">
            <input type="hidden" name="checkboxValues" id="checkboxValues">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">NEXT</button>
            <a href="page3.php" class="next">PREVIOUS</a><br><br>
        </form>

    </div>
    <?php include 'inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>
</html>