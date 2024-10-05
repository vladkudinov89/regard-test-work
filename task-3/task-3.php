<?php
// $boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
// $weight = 6;
// вторые входные данные
$boxes = [2, 4, 3, 6, 1];
$weight = 5;

function getResult(array $boxes, int $weight): int
{
    $matches = [];
    $j = count($boxes) - 1;

    for ($i = 0; $i <= count($boxes); $i++) {
       
        for ($j = $i + 1; $j <= count($boxes) - 1; $j++) {

            $sum = $boxes[$i] + $boxes[$j];

            if ($sum == $weight) {
                echo '^';
                $matches[] = $sum;
                echo '%';
                $i++;
                $j++;
            }
        }
    }

    return count($matches);
}

echo getResult($boxes, $weight);
