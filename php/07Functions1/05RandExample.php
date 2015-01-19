<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    print rand();
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $myName = "matthew";
    $nameLen = strlen($myName);
    $randChar = rand(0,$nameLen);
    print substr($myName, $randChar, 1);

    ?>
    </p>
</html>