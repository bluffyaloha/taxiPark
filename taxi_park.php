<?php
header('Content-type: text/plain');
class Car{
  protected $km;
  protected $coef_day = 0.5;
  protected $coef_km = 1;
  private $brand;
  public function __construct($brand,$km){
    if (! (is_string($brand) && is_integer($km)) ){
      throw new Exception("\$brand must be a string\n
                          \$km must be a integer.");
    }
    $this->km = $km;
    $this->brand = $brand;
  }
  public function getKm(){
    return $this->km;
  }
  public function getname(){
    return $this->brand;
  }
  public function setKm($km){
    $this->km = $km;
  }
}

class Homba extends Car{
  $coef_km ;
  $coef_day ;
}

class Luda extends Car{
  $coef_km ;
  $coef_day ;
}

class Hendai extends Car{
  $coef_km ;
  $coef_day ;
}

class driver{
  private $type_driver;
  public function __construct($type_driver = 'default'){
    $this->type_driver = $type_driver;
  }
  public function getType_driver(){
    return $this->type_driver;
  }
  public function setType_driver($type_driver){
    $this->type_driver = $type_driver;
  }
}

class taxPark{
  protected $places;
  private $cars = array();
  public function __construct($places,$cars){
    foreach($cars as $car){
      if(! $car instanceof Car){
        throw new Exception('Elements of $cars must be Car objects');
      }
      $this->cars = $cars;
      $this->places = $places;
  }
  public function getPlaces(){
    return $this->places;
  }
  
}


?>
