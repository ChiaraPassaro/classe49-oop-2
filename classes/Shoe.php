<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/ClothingAttribute.php';

class Shoe extends Product
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

  protected $sole;
  protected $typeShoe;
  protected $laces;

  public function __construct($id, $code, $name, $price, $type, $sole)
  {
    Parent::__construct($id, $code, $name, $price, $type);

    $this->setSole($sole);
  }

  /**
   * Get the value of sole
   */
  public function getSole()
  {
    return $this->sole;
  }

  /**
   * Set the value of sole
   *
   * @return  self
   */
  public function setSole($sole)
  {
    $this->sole = $sole;

    return $this;
  }

  /**
   * Get the value of typeShoe
   */
  public function getTypeShoe()
  {
    return $this->typeShoe;
  }

  /**
   * Set the value of typeShoe
   *
   * @return  self
   */
  public function setTypeShoe($typeShoe)
  {
    $this->typeShoe = $typeShoe;

    return $this;
  }

  /**
   * Get the value of laces
   */
  public function getLaces()
  {
    return $this->laces;
  }

  /**
   * Set the value of laces
   *
   * @return  self
   */
  public function setLaces($laces)
  {
    $this->laces = $laces;

    return $this;
  }
}
