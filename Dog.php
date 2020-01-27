<?php
class Dog
{
    private $name;
    private $race;
    private $age;
    private $weight;
    private const SPEEDING = 60;

    public function __construct($name='', $race='', $age , $weight = 15)
    {
        $this->name = $name;
        $this->race = $race;
        $this->age = $age;
        $this->weight = $weight;
        echo 'Vous avez adoptez un nouveau '.strtolower(get_class()).'.<br>'; //Il s\'appelle '.$this->name.' et pèse '.$this->weight.'kgs. Il s\'agit d\'un '.$this->race.'. Il est agé de '.$this->age.'<br>';
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

    public function eating(int $quantity)
    {
        $newWeight = $this->getWeight() + $quantity;
        $this->setWeight($newWeight);
    }

    public function running()
    {
        return 'Le chien court à une vitesse de ' . self::SPEEDING . 'km/h<br>';
    }
}
