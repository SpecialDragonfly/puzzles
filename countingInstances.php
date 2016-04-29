<?php
$number = 2;
$instances = 1;
do {
    $instances += substr_count("".$number, "1");
} while ($number++ - $instances !== 0);
echo "Number: ".($number - 1)."\n";
