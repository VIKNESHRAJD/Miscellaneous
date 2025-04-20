<html>
<body>
<?php
echo "Function No arguments:<br>";
function writeMsg() {
    echo "Hello world!<br>";
}
writeMsg();

echo "<br>";

echo "Function with arguments:<br>";
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

echo "<br>";

echo "Function arguments with return:<br>";
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, 5) . "<br>";

echo "<br>";

echo "Function with default arguments:<br>";
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

echo "<br>";

echo "Function returning values:<br>";
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

echo "<br>";

echo "Passing Arguments by Reference:<br>";
function add_five(&$value) {
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;
?>
</body>
</html>

