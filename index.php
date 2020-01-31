<?php
declare(strict_types=1);

require_once 'Cat.php';
require_once 'Dog.php';

$garfield = new Cat();
$garfield->setName('garfield');
$garfield->setRace('chat de goutière');
$garfield->setAge(2);
var_dump($garfield->getAge());
echo $garfield->introduce();
$garfield->eating(10);
echo $garfield->getWeight().'<br>';
echo $garfield->running().'<br>';

$grominet = new Cat();
$grominet->setName('Grominet');
//$grominet->setRace('chat de goutière');
echo $grominet->introduce();

$beethoven = new Dog();
$beethoven->setName('beethoven');
$beethoven->setRace('caniche');
$beethoven->setAge(1);
echo $beethoven->introduce();
$beethoven->eating(10) . '<br>';
echo $beethoven->getWeight() . '<br>';
echo $beethoven->running() . '<br>';

$idefix = new Dog();
$idefix->setName('idefix');
$idefix->setRace('westie');
$idefix->setAge(2);
echo $idefix->introduce();

$toto = new Dog ();
$toto->setName('toto');
$toto->setRace('caniche');
echo $toto->introduce();

$titi = new Dog ();
$titi->setName('titi');
$titi->setAge(2);
$titi->setAge(3);
echo $titi->introduce();

$tata = new Dog ();
$tata->setName('tata');
$tata->setRace('berger allemand');
echo $tata->introduce();

$ghost = new Dog();
echo $ghost->introduce();

$invisible = new Cat();
echo $invisible->introduce();

