<?php
define("MINSIZE", 50);
echo MINSIZE;
echo constant("MINSIZE"); // same thing as the previous line
?>

<?php
// Valid constant names
define("ONE", "first thing");
define("TWO2", "second thing");
define("THREE_3", "third thing");
// Invalid constant names
define("2TWO", "second thing");
define("__THREE__", "third value"); 
?>