<?php
class typeSS {
  public $name;
  public $color;
  public $type;
  public function __construct($name, $color,$type) {
    $this->name = $name;
    $this->color = $color; 
    $this->type = $type; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color} and the fruite is {$this->type}."; 
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight,) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight; 
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
?>
 
