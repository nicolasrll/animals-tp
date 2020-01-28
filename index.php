<?php
require_once 'Cat.php';
require_once 'Dog.php';

$garfield = new Cat('garfield', 'chat de goutière', 5);
echo 'Le chat s\'appelle ' . $garfield->getName() . '. Il pèse '. $garfield->getWeight() . 'kgs. Il s\'agit d\'un ' .$garfield->getRace() . '. Il est agé de ' . $garfield->getAge() . 'ans<br>';

$garfield->eating(10);
echo $garfield->getWeight().'<br>';
echo $garfield->running().'<br>';


$beethoven = new Dog('beethoven', 'caniche', 1);
echo 'Le chien s\'appelle ' . $beethoven->getName() . '. Il pèse ' . $beethoven->getWeight() . 'kgs. Il s\'agit d\'un ' . $beethoven->getRace() . '. Il est agé de ' . $beethoven->getAge() . 'ans<br>';
$beethoven->eating(10) . '<br>';
echo $beethoven->getWeight() . '<br>';

echo $beethoven->running() . '<br>';

$idefix = new Dog('idefix', 'westie', 2);
echo 'Le chien s\'appelle ' . $idefix->getName() . '. Il pèse ' . $idefix->getWeight() . 'kgs. Il s\'agit d\'un ' . $idefix->getRace() . '. Il est agé de ' . $idefix->getAge() . 'ans<br>';
