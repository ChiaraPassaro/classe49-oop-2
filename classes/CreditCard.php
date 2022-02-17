<?php

class CreditCard
{
  protected $nameUser;
  protected $number;
  protected $expirDate;
  protected $cvn;

  public function __construct($nameUser, $number, $expirDate, $cvn)
  {
    $this->setNameUser($nameUser);
    $this->setNumber($number);
    $this->setExpirDate($expirDate);
    $this->setCvn($cvn);
  }
  /**
   * Get the value of nameUser
   */
  public function getNameUser()
  {
    return $this->nameUser;
  }

  /**
   * Set the value of nameUser
   *
   * @return  self
   */
  public function setNameUser($nameUser)
  {
    $this->nameUser = $nameUser;

    return $this;
  }

  /**
   * Get the value of number
   */
  public function getNumber()
  {
    return $this->number;
  }

  /**
   * Set the value of number
   *
   * @return  self
   */
  public function setNumber($number)
  {
    $this->number = $number;

    return $this;
  }

  /**
   * Get the value of expirDate
   */
  public function getExpirDate()
  {
    return $this->expirDate;
  }

  /**
   * Set the value of expirDate
   *
   * @return  self
   */
  public function setExpirDate($expirDate)
  {
    $this->expirDate = $expirDate;

    return $this;
  }

  /**
   * Get the value of cvn
   */
  public function getCvn()
  {
    return $this->cvn;
  }

  /**
   * Set the value of cvn
   *
   * @return  self
   */
  public function setCvn($cvn)
  {
    $this->cvn = $cvn;

    return $this;
  }
}
