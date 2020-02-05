<?php

class Dog extends Animal
{
    protected $weight = 15;
    private const SPEEDING = 60;

    public function __construct()
    {
        parent::__construct();
        echo 'Les chiens sont les meilleurs amis de l\'homme.<br>';
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }

    public function eating(int $eatAdded)
    {
        $this->setWeight($this->getWeight() + $eatAdded);
    }

    public function running()
    {
        return 'Le chien court à une vitesse de ' . self::SPEEDING . 'km/h<br>';
    }

    public function introduce()
    {
        $introduce = 'Le prénom du chien est ' . $this->getName() . '. Son poids est ' . $this->getWeight() . 'kgs. Sa race est ' . $this->getRace() . '. Il est agé de ' . $this->getAge() . ' ans.<br>';
        if ($this->age === 0) {
            $introduce = $introduce .' L\'age avec la valeur 0 signifie que l\'animal à moins de un an ou que cette information n\'a pas encore été renseigné.<br>';
        }

        return $introduce;
    }

    public function makeNoise()
    {
        return 'Le chien aboie';
    }
}
