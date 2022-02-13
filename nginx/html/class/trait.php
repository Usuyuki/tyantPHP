<?php
declare(strict_types=1);

//trait 継承すること無くコードを再利用できる
trait Cap{

    private $radius=5;//cm
    private $height;//cm

    public function getCapacity(){
        return $this->height*$this->radius*$this->radius*pi();
    }
}

class Pack{
    use Cap;
    public $name;
    public function __construct(string $name,int $height){
        $this->name=$name;
        $this->height=$height;
        
    }
}
class Beaker{
    use Cap;
    public $type;
    public function __construct(string $type,int $height){
        $this->type=$type;
        $this->height=$height;
        
    }
}

$gyunyuPack=new Pack("牛乳パック",10);
$coffeeBeaker=new Beaker("珈琲",20);

echo $gyunyuPack->name."のサイズ";
echo $gyunyuPack->getCapacity();
echo "<br>";
echo $coffeeBeaker->type."のサイズ";
echo $coffeeBeaker->getCapacity();