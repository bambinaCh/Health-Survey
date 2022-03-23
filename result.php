<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>

</head>

<body>

    <?php include 'inc/header.php' ?>


    <div class="text-id">

        <div class="title">
            <p><strong>Here is your Feedback...</strong> </p>
        </div>

        <?php
        session_start();

        $post = $_SESSION['index'];
        $value = $post['range-slider'];


        include 'inc/data-collector.php';


        //?????? WHAT THE FUCK
        $_SESSION["last-post"] = $_POST;


        $_SESSION["totalPoints"] = $totalPoints;

        include 'inc/evaluate-user-data.php';

        echo "Your health total points are: " . $totalPoints;
        echo "<br>";


        /*  if (array_sum($a) < 5)
        {
            echo "<p class='final-feedback'>You should improve your health routines</p>";
    
        }
        else {
            echo "<p class='final-feedback'>You are in a good shape</p>";
        } 


        echo "<p class='final-feedback'>" . "Your health is exellent!" . "</p>";*/

        echo "<br>";
        echo "<br>";
        ?>

    </div>
    <?php include 'inc/footer.php' ?>

</body>


<script src="/js/validation.js"></script>

</html>