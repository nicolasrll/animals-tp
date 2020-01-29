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


$toto = new Dog ('toto','caniche', 0);
echo 'Le chien s\'appelle ' . $toto->getName() . '. Il pèse ' . $toto->getWeight() . 'kgs. Il s\'agit d\'un ' . $toto->getRace() . '. Il est agé de ' . $toto->getAge() . 'ans<br>';

$titi = new Dog ('titi','', 2, 3);
echo 'Le chien s\'appelle ' . $titi->getName() . '. Il pèse ' . $titi->getWeight() . 'kgs. Il s\'agit d\'un ' . $titi->getRace() . '. Il est agé de ' . $titi->getAge() . 'ans<br>';

$tata = new Dog ('tata','berger allemand');
echo 'Le chien s\'appelle ' . $tata->getName() . '. Il pèse ' . $tata->getWeight() . 'kgs. Il s\'agit d\'un ' . $tata->getRace() . '. Il est agé de ' . $tata->getAge() . 'ans<br>';

$ghost = new Dog();
$invisible = new Cat();
