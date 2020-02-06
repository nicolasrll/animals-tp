<?php
declare(strict_types=1);

require_once 'Animal.php';
require_once 'AquaticAnimal.php';
require_once 'LandAnimal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Fish.php';

// Create with all informations
$garfield = new Cat();
$garfield->setName('garfield');
$garfield->setRace('chat de goutière');
$garfield->setAge(2);
$garfield->setWeight(3);
echo $garfield->introduce();
$garfield->eating(10);
echo $garfield->getWeight().'<br>';
echo $garfield->running().'<br><br>';

// Create with juste the name and default weight
$grominet = new Cat();
$grominet->setName('Grominet');
echo $grominet->introduce();

// Create with all informations
$beethoven = new Dog();
$beethoven->setName('beethoven');
$beethoven->setRace('caniche');
$beethoven->setAge(1);
$beethoven->setWeight(13);
echo $beethoven->introduce();
$beethoven->eating(1) . '<br>';
echo $beethoven->getWeight() . '<br>';
echo $beethoven->running() . '<br>';

// Create without name
$idefix = new Dog();
//$idefix->setName('idefix');
$idefix->setRace('westie');
$idefix->setAge(2);
echo $idefix->introduce();

// Create without age
$toto = new Dog ();
$toto->setName('toto');
$toto->setRace('caniche');
echo $toto->introduce();

// Create without race
$titi = new Dog ();
$titi->setName('titi');
$titi->setAge(2);
echo $titi->introduce();

// Create without age
$tata = new Dog ();
$tata->setName('tata');
$tata->setRace('berger allemand');
echo $tata->introduce();

// Create without parameters passed
$ghost = new Dog();
echo $ghost->introduce();

// Create without parameters passed
$invisible = new Cat();
echo $invisible->introduce();

echo $garfield->makeNoise() . '<br>';
echo $beethoven->makeNoise() . '<br>';


$nemo = new Fish();
$nemo->setName('Nemo');
$nemo->setRace('poisson-clown');
echo $nemo->getName() . '<br>';
echo $nemo->getRace() . '<br>';
echo $nemo->swimming() . '<br>';
echo $nemo->makeNoise() . '<br>';

