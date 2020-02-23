<?php

function printStrings($strings, $isConcat) {
    foreach($strings as $string){
        echo "<p>" . $string . "</p>";
    }

    if ($isConcat) {
        return implode(", ", $strings);
    }
}

function performArithmetic($operator, ...$numbers) {
    //$args = func_get_args();
    $count = sizeof($numbers);

    if ($operator == '+') {
        $res = 0;
        for ($i = 0; $i < $count; $i++) {
            $res += $numbers[$i];
        }
    } elseif ($operator == '*') {
        $res = 1;
        for ($i = 0; $i < $count; $i++) {
            $res *= $numbers[$i];
        }
    } elseif ($operator == "-") {
        $res = $numbers[0];
        for ($i = 1; $i < $count; $i++) {
            $res = $res - $numbers[$i];
        }
    } elseif ($operator == "/") {
        $res = $numbers[0];
        for ($i = 1; $i < $count; $i++) {
            if ($args[$i] !== 0) {
                $res = $res / $numbers[$i];
            }
        }
    }

    $resString = implode($operator, $numbers) . "=" . $res;
    return $resString;
}

function multipleTable($rows, $cols){
    if(!is_int($rows) || !is_int($cols)){
        echo "Аргументы должны быть целыми числами <br>";
        return;
    }

    echo "<table>";
    for($i = 1; $i <= $rows ; $i++){
        echo "<tr>";
            for($j =1 ; $j <= $cols; $j++){
                echo "<td>" .$i*$j  ."</td>";               
            }
        echo "</tr>";    
    }
    echo "</table>";
}

function printDateNow(){
    echo (date('d.m.Y H:i', time()));
}

function printUnixTime(){
    echo (mktime(0, 0, 0, 2, 24, 2016));
}

function replaceStrings(){
    $str1 = "Карл у Клары украл Кораллы";
    $str2 = "Две бутылки лимонада";

    echo "<br>" . (str_replace(["К", "к"], "", $str1));
    echo "<br>" . (str_replace("Две", "Три", $str2));
}

function printFileData(){
    file_put_contents('test.txt', "Hello again!");
    echo "<br>" . (file_get_contents('test.txt'));
}
