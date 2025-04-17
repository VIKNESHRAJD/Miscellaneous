<html>
<body>
<?php
echo "Function No arguments:";
function writeMsg() {
echo "Hello world!";
}
swriteMsg();
echo "<Br>";
echo"Function with arguments:";
function familyName($fname, $year) {
echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
amilyName("Kai Jim", "1983");
echo "<br>";
echo "Function arguments with return :";
function addNumbers(int $a, int $b) {
return $a + $b;
}
echo addNumbers(5, "5 days");
echo "<br>";
echo "Function with deault arguments";
function setHeight(int $minheight = 50) {
echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo"<br>";
echo "Function returning values:";
function sum(int $x, int $y) {
$z = $x + $y;
return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);echo "<br>";
echo "Passing Arguments by Reference:";
function add_five(&$value) {
$value += 5;
}
$num = 2;
add_five($num);
echo $num;
?>
</body>
</html>
