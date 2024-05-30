<!-- write a PHP program for find „Thursday‟ in week using switch
Function -->
<?php
        $day = 5;

        switch($day)
        {
            case 1:
                echo "SUNDAY";
                break;

            case 2:
                echo "MONDAY";
                break;
            case 3:
                echo "TUESDAY";
                break;
            case 4:
                echo "WEDNSDAY";
                break;
            case 5:
                echo "THURSDAY";
                break;
            case 6:
                echo "FRIDAY";
                break;     
            case 7:
                echo "SATURDAY";
                break;       
            default:
                echo "select the day";
                break;    
        }