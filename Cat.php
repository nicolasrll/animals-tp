<?php

class Cat
{
    private $name;
    private $race;
    private$age;
    private $weight;
    private const SPEEDING = 40;

    function __construct()
    {
        echo 'Vous avez adoptez un nouveau '.strtolower(get_class()).'<br>';
        $this->setWeight(4);
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
        $this->weight += $weight;
    }

    public function eating($quantity)
    {
        $this->setWeight($quantity);
    }

    public function running()
    {
        return 'Le chat court à une vitesse de '.self::SPEEDING.'km/h';
    }
}
