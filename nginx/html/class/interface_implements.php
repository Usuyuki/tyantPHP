<?php
declare(strict_types=1);

/**
 * 事前に定義しておけるinterface 
 * それを使うimplements
 */

interface Holiday{
    public function neru();
    public function kaimono();
    public function animemiru();
}

class Sunday implements Holiday{
    /**
     * このクラスはHolidayに定義されたメソッドすべて書いていないとエラーになる
     */
    public function neru(){
        echo "ねる";
    }
    public function kaimono(){
        echo "かいもの";
    }
    public function animemiru(){
        echo "アニメみる";
    }
}

$sunday=new Sunday();
$sunday->neru();