<?php
require_once __DIR__ . '/CreditCard.php';
class User
{
  protected $name;
  protected $lastname;
  protected $email;
  protected $password;
  protected $paymentMethod;

  public function __construct($name, $lastname, $email, $password)
  {
    $this->setName($name);
    $this->setlastname($lastname);
    $this->setEmail($email);
    $this->setPassword($password);
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
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of lastname
   */
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of paymentMethods
   */
  public function getPaymentMethod()
  {
    return $this->paymentMethod;
  }

  /**
   * Set the value of paymentMethods
   *
   * @return  self
   */
  public function setPaymentMethod(CreditCard $paymentMethod)
  {
    //se non usiamo tipo in parametro
    if (get_class($paymentMethod) === 'CreditCard') {
      $this->paymentMethod = $paymentMethod;
    } else {
      throw new Exception('metodo non consentito');
    }

    return $this;
  }
}
