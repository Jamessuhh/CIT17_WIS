<?php
/*
The most universally effective PHP tag style is:
<?php...?>

Short or short-open tags look like this:
<?...?>

ASP-style tags mimic the tags used by Active Server Pages to delineate code blocks. ASPstyle tags look like this:
<%...%>

HTML script tags look like this:
<script language="PHP">...</script>

*/
?>

<?php
# This is a comment, and
# This is the second line of the comment
// This is a comment too. Each style comments only
print "An example with single line comments";
?>

<?php
$variable = "Variable";
# First Example
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;
# Second Example
print "This spans
multiple lines. The newlines will be
output as well";
?>

<?php
/* This is a comment with multiline
 Author : Mohammad Mohtashim
 Purpose: Multiline Comments Demo
 Subject: PHP
*/
print "An example with multi line comments";
?>

<?php
$four = 2 + 2; // single spaces
# $four <tab>=<tab2<tab>+<tab>2 ; // spaces and tabs
$four =
2+
2; // multiple lines
print $four
?>

<html>
<body>
<?php
$capital = 67;
print "Variable capital is $capital<br>";
# print "Variable CaPiTaL is $CaPiTaL<br>"; this doesnt work
?>
</body>
</html>

<?php 
$greeting = "Welcome to PHP!<br>";
print $greeting
?>

<?php
if (3 == 2 + 1)
print("Good - I haven't totally lost my mind.<br>");
if (3 == 2 + 1)
{
print("Good - I haven't totally");
print("lost my mind.<br>");
}
?>

<?php
 echo "Hello PHP!!!!!";
?>
