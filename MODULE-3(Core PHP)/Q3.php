<!-- Write a PHP program to check Leap years between 1901 to 2016 Using
nested if. -->
<?php

    function year_check($my_year)
    {
        if($my_year % 400 == 0)
            echo($my_year." is a leap year<br>");
        else if($my_year % 100 == 0)
            echo($my_year." is not a leap year<br>");
        else if ($my_year % 4 == 0)
            echo($my_year." is a leap year<br>");
        else 
            echo($my_year." is not a leap year<br>");
    }
        for($i=1900;$i<=2016;$i++)
        {
            $my_year = $i;
            year_check($my_year); 
        }
    ?>
