<!-- Write program to remove duplicate values from array -->
<?php

        $arr = array(
            "a" => "MH",
            "b" => "JK",
            "c" => "JK",
            "d" => "OR"
        );
        
        // Array after removing duplicates
        print_r(array_unique($arr));
?>