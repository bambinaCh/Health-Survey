<!DOCTYPE html>
<html>

<head>
    <title>Question 1- EMR Survey</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php include 'inc/header.php' ?>
    <?php include 'inc/data-collector.php' ?>

    <div class="text-id">
        <form action="page2.php" method="post" onsubmit="return validateQuestion('range-slider');">

            <?php include 'inc/survey-title.php' ?>
            <br>
            <p>Question 1:</p>
            <label for="q1"><strong>How fit is your body?:</strong></label><br>
            <div id="r-s" class="row flex-nowrap">
                <div class="col" style="text-align: left;">
                    <p>Not fit</p>
                </div>
                <div class="col" style="text-align: center;">
                    <p>50/50</p>
                </div>
                <div class="col" style="text-align: right;">
                    <p>Fit</p>
                </div>
            </div>

            <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
            <input type="hidden" name="lastPageID" value="index">
            <input type="hidden" name="range-slider-changed" id="range-slider-changed">
            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next">NEXT</button><br><br>

        </form>

        <br>
    </div>

    <?php include 'inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>
</html>