<?php
echo "<h1>PHP Partie 03</h1>";
// Ex 01
echo "<h2>ex 01</h2>";
$toIncrease = 0;
for($toIncrease; $toIncrease <= 10; $toIncrease++)
{
    echo "$toIncrease";
}
// Ex 02
echo "<h2>ex 02</h2>";
$premiere = 0;
$deuxieme =  rand (1, 100);
while($premiere <= 20)
{
    echo $premiere * $deuxieme . ' ';
    $premiere++;
}
// Ex 03
echo "<h2>ex 03</h2>";
$premiere = 100;
$deuxieme =  rand (0, 100);
while($premiere >= 10)
{
    echo $premiere * $deuxieme . ' ';
    $premiere--;
}
// Ex 04
echo "<h2>ex 04</h2>";
for($i = 1; $i < 10; $i += $i/2)
{
    echo "$i ";
}
// Ex 05
echo "<h2>ex 05</h2>";
for($i = 1; $i <= 15; $i++)
{
    echo $i . " On y arrive presque ! ";
}
// Ex 06
echo "<h2>ex 06</h2>";
for($i = 20; $i > 0; $i--)
{
    echo $i . " C'est presque bon ! ";
}
// Ex 07
echo "<h2>ex 07</h2>";
for($i = 1; $i < 100; $i+=15)
{
    echo $i . " On tient le bon bout ! ";
}
// Ex 08
echo "<h2>ex 08</h2>";
for($i = 200; $i > 0; $i-=12)
{
    echo $i . " Enfin !!!! ";
}
?>

