<?php

require_once __DIR__ . '/Classes/Products.php';
require_once __DIR__ . '/Classes/Products_Classes/Top.php';
require_once __DIR__ . '/Classes/Products_Classes/Pants.php';
require_once __DIR__ . '/Classes/Products_Classes/Shoes.php';

$pulloverNike = new Top('L', 'Pullover', 'Nike', 39.99);

$jeansLevis = new Pants(48, 'Jeans', 'Levis', '80');

$airForceNike = new Shoes(44.5, 'Air Force 1', 'Nike', 100);

var_dump($pulloverNike, $jeansLevis, $airForceNike);
