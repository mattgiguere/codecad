<!DOCTYPE html>
<html>
    <head>
        <title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
    <?php
    $loopTails = 4;
    echo "<p>Let's count how many flips are needed to get " . $loopTails . " tails in a row!";

    //Add while loop below
    $tailCount = 0;
    $totalFlips = 0;
    while($tailCount <= 4) {
        $flip = rand(0,1);
        if ($flip == 1){
            echo "<div class=\"coin\">H</div>";
        }
        else {
            echo "<div class=\"coin\">T</div>";
            $tailCount++;
        }
        $totalFlips ++;
    }
    echo "<p>It took " . $totalFlips . " flips!</p>";
    
    ?>
    </body>
</html>