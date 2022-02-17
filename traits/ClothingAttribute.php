<?php

trait ClothingAttribute
{

  protected $size;
  protected $color;
  protected $tissue;
  protected $gender;



  /**
   * Get the value of size
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   *
   * @return  self
   */
  public function setSize($size)
  {
    $this->size = $size;

    return $this;
  }

  /**
   * Get the value of color
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set the value of color
   *
   * @return  self
   */
  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }

  /**
   * Get the value of tissue
   */
  public function getTissue()
  {
    return $this->tissue;
  }

  /**
   * Set the value of tissue
   *
   * @return  self
   */
  public function setTissue($tissue)
  {
    $this->tissue = $tissue;

    return $this;
  }

  /**
   * Get the value of gender
   */
  public function getGender()
  {
    return $this->gender;
  }

  /**
   * Set the value of gender
   *
   * @return  self
   */
  public function setGender($gender)
  {
    $this->gender = $gender;

    return $this;
  }
}
