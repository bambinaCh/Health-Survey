<!DOCTYPE html>
<html>

<head>
    <title>Question 3 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
   
</head>

<body>
    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>

    <div class="text-id">
        <form action="page4.php" method="post" onsubmit="return validateQuestion('range-slider');">

            <?php include 'inc/survey-title.php' ?>
            <br>
            <p>Question 3:</p>
            <label for="q3"><strong>How important is phisycal activity for you?</strong> </label>

            <div id="r-s" class="row flex-nowrap">
                <div class="col" style="text-align: left;">
                    <p>Not much</p>
                </div>
                <div class="col" style="text-align: center;">
                    <p>50/50</p>
                </div>
                <div class="col" style="text-align: right;">
                    <p>A lot</p>
                </div>
            </div>
            <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
            <input type="hidden" name="lastPageID" value="question-3">
            <input type="hidden" name="range-slider-changed" id="range-slider-changed">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">NEXT</button><br>
            <a href="page2.php" class="next">PREVIOUS</a><br><br>
        </form>


    </div>
    <?php include 'inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>
</html>