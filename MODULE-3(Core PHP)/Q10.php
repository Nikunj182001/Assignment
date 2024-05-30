<!-- How can you tell if a number is even or odd without using any Condition or
loop?  -->
<?php

        $number = 11;
        $module = $number%2 == 0;
        echo $module;

        $module = ($number%2 == 0) ? "odd" : "even";

        echo $number." is ".$module;
?>