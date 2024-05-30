<?php 
        // Write a PHP program to enter marks of five subjects Physics, Chemistry,
        // Biology, Mathematics and Computer, calculate percentage and grade by if
        // else w

        function percentage($phy,$chem,$bio,$math,$comp)
        {
            $perc = ($phy+$chem+$bio+$math+$comp)/5;
            echo "Percentage is : ".$perc."%<br>";

            
        }
        function grade($phy,$chem,$bio,$math,$comp)
        {
            $perc = ($phy+$chem+$bio+$math+$comp)/5;

            if($perc >= 90 && $perc <= 100)
            {
                echo " GRADE : DESTINATION......";
            }
            else if($perc >= 70 && $perc <= 89)
            {
                echo " GRADE : A......";
            }
            else if($perc >= 50 && $perc <= 69)
            {
                echo " GRADE : B......";
            }
            else if($perc >= 33 && $perc <= 49)
            {
                echo " GRADE : C......";
            }
            else{
                echo " GRADE : F......";
            }
           
        }
        percentage(50,67,58,94,37);
        grade(50,67,58,94,37);