<?php #Integer 
    $int_var = 12345;
    $another_int = -12345 + 12345;
?> 

<?php #Doubles
   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   echo $few;
   echo "<br>"; 
?>

<?php #Boolean
    if (TRUE) 
    echo "This will always print<br>";
   else
    echo "This will never print";
?>

<?php /*
    $true_num = 3 + 0.14159;
    $true_str = "Tried and true"
    $true_array[49] = "An array element";
    $false_array = array();
    $false_null = NULL;
    $false_num = 999 - 999;
    $false_str = "";
*/
?>
<?php #NUll
    $my_var = NULL;
?>

<?php #Strings
    $string_1 = "This is a string in double quotes";
    $string_2 = "This is a somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; // a string with zero characters
?>

<?php
    $variable = "name";
    $literally = 'My $variable will not print! <br>';
    print($literally);
    $literally = "My $variable will print! <br>";
    print($literally);
?>

<?php
    $channel =<<<_XML_
    <channel>
        <title> What's For Dinner<br></title>
        <link>http://menu.example.com/ <br></link>
        <description>Choose what to eat tonight.<br></description>
    </channel>
    _XML_;

    echo <<<END
    This uses the "here document" syntax to output
    multiple lines with variable interpolation. Note
    that the  here document terminator must appear on a
    line with just a semicolon. no extra whitespace!
    <br />
    END;

    echo $channel
?>

<?php
    $x = 4;
    function assignx () {
    $x = 0;
    echo "\$x inside function is $x. <br>";
    }
    assignx();
    echo "\$x outside of function is $x. <br>";
?>

<?php
    // multiply a value by 10 and return it to the caller
function multiply ($value) {
    $value = $value * 10;
    return $value;
   }
   $retval = multiply (10);
   Print "Return value is $retval\n"
?>

<?php
    $somevar = 15;
    function addit() {
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar";
    }
    addit()
?>

<?php
    function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print "";
    }
    keep_track();
    keep_track();
    keep_track();    
?>