<?php

function printStrings($stringsArr, $isReturn) {
    foreach($stringsArr as $itemString){
        echo "<p>" . $itemString . "</p>";
    }

    if ($isReturn) {
        return implode(", ", $stringsArr);
    }
}

function performArithmetic($operator) {
    $args = func_get_args();
    $res;

    if ($operator == '+') {
        $res = 0;
        for ($i = 1; $i < sizeof($args); $i++) {
            $res += $args[$i];
        }
    } elseif ($operator == '*') {
        $res = 1;
        for ($i = 1; $i < sizeof($args); $i++) {
            $res *= $args[$i];
        }
    } elseif ($operator == "-") {
        $res = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $res = $res - $args[$i];
        }
    } elseif ($operator == "/") {
        $res = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            if ($args[$i] !== 0) {
                $res = $res / $args[$i];
            }
        }
    }

    return $res;
}

function multipleTable($dig1, $dig2){
    if(!is_int($dig1) || !is_int($dig2)){
        echo "Аргументы должны быть целыми числами <br>";
        return;
    }

    echo "<table>";
    for($i = 1; $i <= $dig1 ; $i++){
        echo "<tr>";
            for($j =1 ; $j <= $dig2; $j++){
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
