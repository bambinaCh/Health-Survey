<?php
$totalPoints = 0;

//echo "\$post = $post<br>";

if (isset($_SESSION['index'])) {
    // hole die post werte aus der SESSION
    $post = $_SESSION['index'];

    //prüfe mit isset den schlüssel range-slider in $post
    if (isset($post['range-slider'])) {

        //hole den wert range slider aus $post
        $valueQuestion1 = $post['range-slider'];

        //echo "\$valueQuestion1 = $valueQuestion1<br>";


        //forme mit intval den wert in einem integer wert um
        $valueQuestion1 = intval($valueQuestion1);

        if ($valueQuestion1 > 2.5) {
            //"gesund" sind werte ab 3
            $totalPoints = $totalPoints + 1;
        }

        //echo "\$totalPoints = $totalPoints<br>";
    } else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }
}


/*QUESTION 4*/
if (isset($_SESSION['question-4'])) {

    $post = $_SESSION['question-4'];

    if (isset($post['checkboxValues'])) {

        $checkboxValues = $post['checkboxValues'];

        $array = explode(',', $checkboxValues);


        /*echo "<pre>";
        print_r($array);
        echo "</pre>";*/
    }
}



$a = array($_SESSION['question1'], $_SESSION['question2'], $_SESSION['question3'], $_SESSION['question5'], $_SESSION['question6'], $_SESSION['question7'], $_SESSION['question8'], $_SESSION['question9'], $_SESSION['question10']);
//echo "esta es la suma de todo " .array_sum($a);


if (array_sum($a) < 1) {
    echo "<p class='final-feedback'>You should look better after yourself...</p><img src='/img/pic-unge.png' style=' width:200px;'><br>";
} else {
    echo "<p class='final-feedback'>Well done continue like this!</p><img src='/img/pic-ge.jpeg' style='width:200px;'>";
}
