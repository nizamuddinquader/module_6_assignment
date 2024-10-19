<?php

function calculateResult($bangla, $english, $math, $accounting, $economics)
{

    $totalMarks = $bangla + $english + $math + $accounting + $economics;
    $averageMark = $totalMarks / 5;

    $grade = "";
    switch (true) {
        case ($averageMark <= 100 && $averageMark >= 80):
            $grade = "A+";
            break;

        case ($averageMark < 80 && $averageMark >= 70):
            $grade = "A";
            break;

        case ($averageMark < 70 && $averageMark >= 60):
            $grade = "A-";
            break;

        case ($averageMark < 60 && $averageMark >= 50):
            $grade = "B";
            break;

        case ($averageMark < 50 && $averageMark >= 40):
            $grade = "C";
            break;

        case ($averageMark < 40 && $averageMark >= 33):
            $grade = "D";
            break;

        default:
            $grade = "F";

    }

    $passOrFail = "";
    switch (true) {
        case ($bangla <= 100 && $bangla >= 33 && $english <= 100 && $english >= 33 && $math <= 100 && $math >= 33 && $accounting <= 100 && $accounting >= 33 && $economics <= 100 && $economics >= 33):
            $passOrFail = "Pass";
            break;

        default;
            $passOrFail = "Fail";
    }

    switch (true) {
        case ($bangla <= 100 && $bangla >= 0 && $english <= 100 && $english >= 0 && $math <= 100 && $math >= 0 && $accounting <= 100 && $accounting >= 0 && $economics <= 100 && $economics >= 0):

            if ($passOrFail == "Fail") {
                echo "You have failed.";
            } else {
                echo "Total Marks: {$totalMarks}<br>Average Marks: {$averageMark}<br>Grade: {$grade}";
            }
            break;

        default;
            echo "Mark range is invalid";


    }

}

calculateResult(80, 90, 90, 90, 80);


?>













