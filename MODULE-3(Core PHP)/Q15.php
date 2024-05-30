<!-- Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total. -->

<?php
        $numbers = array(46,34,67,47,86);
        $total = 0;
        for($i=0;$i<5;$i++)
        {
            $total = $total + $numbers[$i];
        }
        echo $total;