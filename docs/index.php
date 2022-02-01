<?php
// First Name
$first = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
// Last Name
$last = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
// Age
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);








?>



<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="css/main.css">
</head>



<body>
    <div class="content">
        <ul class="list">
            <li class="contentitem">
                <?php
                    // Displaying Name if available
                    if(!empty($first) && !empty($last)){
                        echo "Hello, I'm {$first} {$last}.";
                    } else {
                        echo "Please add 'first' and 'last' to the URL.";
                    }
                ?>
            </li><br>
            <li class="contentitem">
                <?php
                    //Displaying Days Alive
                    if(!empty($age)){
                        $days = $age * 365;
                        echo "I have been alive for {$days} days.";
                    } else {
                        echo "Please add 'age' to the URL.";
                    }
                ?>
            </li><br>
            <li class="contentitem">
                <?php
                    // Displaying Age Conditional
                    if(!empty($age) && $age >= 18){
                        echo "I can vote in the United States.";
                    } elseif(!empty($age) && $age < 18) {
                        echo "I cannot vote in the United States.";
                    } else {
                        echo "Please add 'age' to the URL.";
                    }
                ?>
            </li><br>
            <li class="contentitem">
                <?php
                    // Dispaying Current Date
                    echo "Today is " . date("d-m-Y") . ". <br> ";
                ?>
            </li><br>
        </ul>
    </div>


</body>
</html>