<!-- • Create multiple Traits and use it in to a single class? -->
<?php

    trait A
    {
        function abc()
        {
            echo "abc<br>";
        }
    }
    trait B
    {
        function ABD()
        {
            echo "ABC<br>";
        }
    }
    class xyz
    {
        use A,B;
        function bdc()
        {
            echo "bcd<br>";
        }
    }
    $obj = new xyz;
    $obj->abc();
    $obj->ABD();
    $obj->bdc();
