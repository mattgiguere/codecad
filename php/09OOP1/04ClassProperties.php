<!DOCTYPE html>
<html>
    <head>
      <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
      <p>
        <!-- Your code here -->
        <?php
        class Person {
            public $isAlive = true;
            public $firstName;
            public $lastName;
            public $age;
            
        }
        $teacher = new Person();
        $student = new Person();
        echo $teacher->isAlive;
        ?>
      </p>
    </body>
</html>