<!DOCTYPE html>
<html>

<head>
    <title>Question 5 - EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
   
</head>

<body>
    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>
    <div class="text-id">

        <form action="page6.php" method="post" onsubmit="return validateQuestion('range-slider');">

            <?php include 'survey-title.php' ?>
            <br>
            <p>Question 5:</p>
            <label for="q5"><strong>Do you have the feeling (too little, enough
                    or far too much ) that you have extra physical engage in activities?</strong></label><br><br>

            <div id="r-s" class="row flex-nowrap">
                <div class="col" style="text-align: left;">
                    <p>Too litle</p>
                </div>
                <div class="col" style="text-align: center;">
                    <p>Enough</p>
                </div>
                <div class="col" style="text-align: right;">
                    <p>Far</p>
                </div>
            </div>

            <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
            <input type="hidden" name="lastPageID" value="question-5">
            <input type="hidden" name="range-slider-changed" id="range-slider-changed">
            <p id="validation-warning" class="warning"></p>

            <br>
            <button type="submit" class="next">NEXT</button><br>
            <a href="page4.php" class="next">PREVIOUS</a>
            <br><br>


        </form>
        
        

    </div>

    <?php include 'inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>
</html>