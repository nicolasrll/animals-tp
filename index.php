<?php
require_once 'Cat.php';
require_once 'Dog.php';

$garfield = new Cat();
echo $garfield->getName();
echo 'Le chat pèse '.$garfield->getWeight().'kgs.<br>';

$garfield->eating(6);
echo $garfield->getWeight().'<br>';

echo $garfield->running().'<br>';


$beethoven = new Dog();
echo $beethoven->getName();
echo 'Le chien pèse '.$beethoven->getWeight().'kgs.<br>';

$beethoven->eating(12);
echo $beethoven->getWeight().'<br>';

echo $beethoven->running().'<br>';

$idefix = new Dog('idefix', 'westie', 2);
echo $idefix->getName().' '.$idefix->getRace().' '.$idefix->getAge.''.$idefix->getWeight();

