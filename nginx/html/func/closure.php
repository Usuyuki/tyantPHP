<?php

declare(strict_types=1);
/**
 * 無名関数＝クロージャ
 */

//後で代入

function counter(): int
{
    $count = 0;
    //&で参照渡し(リファレンス渡し)、Cのポインタ的な
    return function () use (&$count): int {
        return ++$count;
    };
}

$counterF = counter();


echo $counterF();
echo $counterF();
echo $counterF();

//そのまま代入

$aisatu = function (string $kotoba): string {
    return $kotoba;
};

echo $aisatu("こんにちは");

//略記方(アロー関数)

$kireiAisatu = fn (string $kotoba): string  => "お" . $kotoba;


echo $kireiAisatu("こんにちは");