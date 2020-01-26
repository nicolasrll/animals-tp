<?php

class Dog
{
    private $name;
    private $race;
    private $age;
    private $weight;
    private const SPEEDING = 60;

    public function __construct($name = '', $race = '', $age = 0, $weight = 15)
    {
        echo 'Vous avez adoptez un nouveau '.strtolower(get_class()).'<br>';
        $this->name = $name;
        $this->race = $race;
        $this->$age = $age;
        $this->weight = $weight;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setRace($race)
    {
        $this->race = $race;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function eating($quantity)
    {
        $newWeight += $this->getWeight() + $quantity;
        $this->setWeight($newWeight);
    }

    public function running()
    {
        return 'Le chien court à une vitesse de '.self::SPEEDING.'km/h';
    }
}
