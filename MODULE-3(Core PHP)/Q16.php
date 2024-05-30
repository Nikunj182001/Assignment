<!-- Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns -->
<?php       
            $balances= array(
                array("13",24,"sdg",342,242),
                array("sf","sdg","sdf","sdf","sdf"),
                array(35,56,45,35,57)
            );

            foreach($balances as $x)
            {
                foreach($x as $y)
                {
                    echo $y." ";
                }
                echo "<br>";
            }