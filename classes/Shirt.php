<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/ClothingAttribute.php';

class Shirt extends Product
{
  //ereditate da genitore product
  // protected $id;
  // protected $code;
  // protected $name;
  // protected $price;
  // protected $brand;
  // protected $photo;
  // protected $description;
  // protected $type;

  use ClothingAttribute;
  //attributi ereditati da trait
  // protected $size;
  // protected $color;
  // protected $tissue;
  // protected $gender;

}
