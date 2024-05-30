<!-- How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array.  -->

<?php
            //single dimensonal
            $arr = array(1,2,3,4,5,6,7,8);

            //multidimensonal
            $array = array(
                array(1,2,3,4,4),
                array(2,3,5,6,4,3),
                array(2,3,4,5,67,7)
            );
            //associative
            $arrays = array(1=>"kgdf",5=>"sdgf",9=>"kjhdf");

            foreach($arr as $x)
            {
                echo $x."<br>";
            }

            foreach($array as $y)
            {
                foreach($y as $z)
                {
                    echo $z;
                }
                echo "<br>";
            }
            foreach($arrays as $hi)
            {
                echo $hi."<br>";
            }

            $a = "hello";
            $h = explode(',',$a);
                foreach($h as $k)
                {
                    echo $k;
                }
           