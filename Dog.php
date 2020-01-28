<?php

class Dog
{
    private $name;
    private $race;
    private $age;
    private $weight;
    private const SPEEDING = 60;

    public function __construct(string $name='',string $race='',int $age ,int $weight=15)
    {
        $this->setName($name);
        $this->setRace($race);
        $this->setAge($age);
        $this->setWeight($weight);

        echo 'Vous avez adoptez un nouveau ' . strtolower(get_class()) . '.<br>';
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

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRace(string $race)
    {
        $this->race = $race;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
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
}
