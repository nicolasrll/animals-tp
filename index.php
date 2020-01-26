<?php
require 'Cat.php';
require 'Dog.php';

$garfield = new Cat();
echo $garfield->getName();
echo 'Le chat pèse '.$garfield->getWeight().'kgs.<br>';

$garfield->eating(3);
echo $garfield->getWeight().'<br>';

echo $garfield->running().'<br>';


$beethoven = new Dog();
echo $beethoven->getName();
echo 'Le chat pèse '.$beethoven->getWeight().'kgs.<br>';

$beethoven->eating(8);
echo $beethoven->getWeight().'<br>';

echo $beethoven->running().'<br>';
