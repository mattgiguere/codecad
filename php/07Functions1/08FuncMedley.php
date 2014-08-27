<html>
    <p>
    <?php
    // Create an array and push on the names
    // of your closest family and friends
    $fav_peeps = array("Haven", "Aurelia", "Jack", "Erin", "John",  "Kaylea");
    array_push($fav_peeps, "Ben");
    
    // Sort the list
    sort($fav_peeps);

    // Randomly select a winner!
    $winner_id = rand(0, count($fav_peeps));

    // Print the winner's name in ALL CAPS
    print strtoupper($fav_peeps[$winner_id]);
    ?>
    </p>
</html>