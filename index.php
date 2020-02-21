<?php
require('src/functions.php');

printStrings(["Первая", "Вторая"], false);
echo (printStrings(["Первая", "Вторая"], true)) . "<br>";

echo (performArithmetic('+', 2, 5)) . "<br>";
echo (performArithmetic('*', 2, 5))  . "<br>";
echo (performArithmetic('-', 2, 5, 2, 4))  . "<br>";
echo (performArithmetic('/', 6, 2, 5))  . "<br>";

multipleTable(8, 4);

multipleTable("jbkibdfdfki", 4);

printDateNow();
echo "<br>";
printUnixTime();

replaceStrings();

printFileData();
