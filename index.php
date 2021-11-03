<?php

require_once __DIR__ . '/Classes/Products.php';
require_once __DIR__ . '/Classes/Products_Classes/Top.php';
require_once __DIR__ . '/Classes/Products_Classes/Pants.php';
require_once __DIR__ . '/Classes/Products_Classes/Shoes.php';
require_once __DIR__ . '/Classes/Users.php';
require_once __DIR__ . '/Classes/Users_Classes/Premium.php';
require_once __DIR__ . '/Classes/Users_Classes/Employee.php';

$pulloverNike = new Top('L', 'Pullover', 'Nike', 39.99);

$jeansLevis = new Pants(48, 'Jeans', 'Levis', 80);

$airForceNike = new Shoes(44.5, 'Air Force 1', 'Nike', 100);

$user1 = new Users('Marco', 'Rossi', 'marco@gmail.com', '20-07-1999');

$userPremium2 = new PremiumUsers('Mario', 'Verdi', 'mario@gmail.com', '08-03-1994', 2);
$userPremium2->setSconto($userPremium2->getLivello());

$employee = new Employee('Alessia', 'Bianchi', 'alessia@gmail.com', '23-10-1990');
$employee->setSconto();

var_dump($pulloverNike, $jeansLevis, $airForceNike, $user1, $userPremium2, $employee);
