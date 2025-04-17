<html>
<body>
<?php
echo "Arithmetic operators:<br>";
$a = 10; 
$b = 20;
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br><br>";

echo "Relational operators:<br>";
$x = 50; 
$y = 30;
var_dump($x < $y);
echo "<br>";
var_dump($x > $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br><br>";

echo "Unary Operators:<br>";
$x = 10;
echo $x++ . " ";
echo $x . "<br><br>";

echo "Logical Operators:<br>";
$x = 100;
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello world!<br>";
}

if ($x == 100 or $y == 80) {
    echo "Hello world!<br>";
}

echo "<br>";

echo "String Concatenation Operators:<br>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br><br>";

echo "PHP Array Operators:<br>";
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
print_r($x + $y); // union of $x and $y
echo "<br><br>";

echo "PHP Conditional Assignment Operators:<br>";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";

$user = "John Doe";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";

// Check if $_GET["user"] is set before using it
$user = $_GET["user"] ?? "anonymous";
echo $user;
echo "<br>";

// Ensure $color has a default value if not set
$color = $color ?? "red";
echo $color;
?>
</body>
</html>
