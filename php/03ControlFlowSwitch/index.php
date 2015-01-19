<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    $carrot = 'orange';
        switch($carrot) {
            case 'green':
                echo "It's not ripe yet!";
                break;
            case 'orange':
                echo "Yum! Time to harvest!";
                break;
            case 'brown':
                echo "Yuck! You missed your orange opportunity!";
                break;
            default:
                echo "Weird! I've never seen a carrot that color before!";
        }
    ?>
    </body>
</html>