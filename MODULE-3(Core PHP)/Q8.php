<!-- • Write a program for this Pattern:
*****
*
*
*
***** -->

<?php
            for($i=1;$i<=5;$i++)
            {
                if($i==1 || $i == 5)
                {
                    for($j=1;$j<=5;$j++)
                        {
                            echo " * ";
                        }
                }
                else
                {
                    echo " * ";
                }
                echo "<br>";
            }

