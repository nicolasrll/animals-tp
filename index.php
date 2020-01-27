<?php
require_once 'Cat.php';
require_once 'Dog.php';

$garfield = new Cat('garfield', 'chat de goutière', 5);
echo 'Le chat s\'appelle '.$garfield->getName().'. Il pèse '.$garfield->getWeight().'kgs. Il s\'agit d\'un '.$garfield->getRace().'. Il est agé de '.$garfield->getAge().'ans<br>';

$garfield->eating(6);
echo $garfield->getWeight().'<br>';
echo $garfield->running().'<br>';


$beethoven = new Dog('beethoven', 'caniche', 1);
echo 'Le chien s\'appelle '.$beethoven->getName().'. Il pèse '.$beethoven->getWeight().'kgs. Il s\'agit d\'un '.$beethoven->getRace().'. Il est agé de '.$beethoven->getAge().'ans<br>';
$beethoven->eating(10).'<br>';
echo $beethoven->getWeight().'<br>';

echo $beethoven->running().'<br>';

$idefix = new Dog('idefix', 'westie', 2);
echo 'Le chien s\'appelle '.$beethoven->getName().'. Il pèse '.$beethoven->getWeight().'kgs. Il s\'agit d\'un '.$beethoven->getRace().'. Il est agé de '.$beethoven->getAge().'ans<br>';


echo '<br>Modification des propriété d\'un chat avec paramètre non attendus :';
$garfield->setName(456);
echo $garfield->getName();

$garfield->setRace(123);
echo $garfield->getRace();

$garfield->setAge('wamiz');
echo $garfield->getAge();

$garfield->setWeight('bengal');
echo $garfield->getWeight();


echo '<br>Modification des propriété d\'un chien avec paramètre non attendus :';
$idefix->setName(456);
echo $idefix->getName();

$idefix->setRace(123);
echo $idefix->getRace();

$idefix->setAge('medor');
echo $idefix->getAge();

$idefix->setWeight('labrador');
echo $idefix->getWeight();
