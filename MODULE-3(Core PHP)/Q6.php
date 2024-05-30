<!-- • Write a program to find whether a number is Armstrong or not -->

        <?php  
                $num=407;  
                $total=0;  
                $x=$num;  
                    while($x!=0)  
                    {  
                    $rem=$x%10;  
                    $total=$total+$rem*$rem*$rem;  
                    $x=$x/10;  
                    }  
                if($num==$total)  
                {  
                    echo "Yes ".$num." is an Armstrong number";  
                }  
                else  
                {  
                     echo "No it is not an armstrong number";  
                }  
        ?>