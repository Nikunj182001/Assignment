<!-- Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34  -->

<?php
        function Fibonacci($n){ 

            $num1 = 0; 
            $num2 = 1; 

            $counter = 0; 
            while ($counter < $n){ 
                echo ' '.$num1; 
                $num3 = $num2 + $num1; 
                $num1 = $num2; 
                $num2 = $num3; 
                $counter = $counter + 1; 
            } 
            } 

            // Driver Code 
            $n = 10; 
            Fibonacci($n); 
?> 