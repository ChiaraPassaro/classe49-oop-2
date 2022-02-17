<?php

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Shoe.php';
require_once __DIR__ . '/classes/Shirt.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';

// $product = new Product(1, 'aht653', 'Portachiavi', 10.50, 'Accesories');

// $product->setPhoto(['jdjd' => 3993]);

// var_dump($product);

$shirt = new Shirt(2, 'aht653', 'Tshirt Maniche Corte', 50.50, 'Body Top');

// var_dump($shirt);

$shoe = new Shoe(3, 'j0j0f8d', 'Mocassini Blue', 100, 'Body Bottom', 'Gomma');

$shoe->setSize(44);
echo $shoe->getSize();

// var_dump($shoe);

$user = new User('Chiara', 'Passaro', 'chiara@email.it', '5432300');
$creditCard = new CreditCard('Chiara Passaro', '65439008764333', '04/23', 532);
// try {
//   $user->setPaymentMethod(new CreditCard('Chiara Passaro', '65439008764333', '04/23', 532));
// } catch (TypeError $error) {
//   echo $error->getMessage();
// }

try {
  $user->setPaymentMethod($creditCard);
} catch (TypeError $error) {
  echo $error->getMessage();
}


var_dump($user->getPaymentMethod());
