<?php

class Product
{
  protected $id;
  protected $code;
  protected $name;
  protected $price;
  protected $brand;
  protected $photo;
  protected $description;
  protected $type; //top body ...

  public function __construct($id, $code, $name, $price, $type)
  {
    $this->setId($id);
    $this->setCode($code);
    $this->setName($name);
    $this->setPrice($price);
    $this->setType($type);
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    if (!is_int($id)) {
      throw new Exception('Non è un numero intero');
    }
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of code
   */
  public function getCode()
  {
    return $this->code;
  }

  /**
   * Set the value of code
   *
   * @return  self
   */
  public function setCode($code)
  {
    //controlliamo che il code corrisponda a caratteristiche particolari
    $this->code = $code;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    if (strlen(trim($name)) > 0) {
      $this->name = $name;
    } else {
      throw new Exception('Inserire una stringa');
    }

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of brand
   */
  public function getBrand()
  {
    return $this->brand;
  }

  /**
   * Set the value of brand
   *
   * @return  self
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;

    return $this;
  }

  /**
   * Get the value of photo
   */
  public function getPhoto()
  {
    return $this->photo;
  }

  /**
   * Set the value of photo
   *
   * @return  self
   */
  public function setPhoto(string $photo)
  {
    $this->photo = $photo;

    return $this;
  }

  /**
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of type
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @return  self
   */
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }
}
