<?php

class Cat
{
    private $name = 'indéfinie';
    private $race = 'indéfinie';
    private $age = 1; // 0 egal age not uninformed or age < 1 like baby
    private $weight = 4;
    private const SPEEDING = 40;

    public function __construct()
    {
        echo 'Vous avez adoptez un nouveau ' . strtolower(get_class()) . '.<br>';
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race)
    {
        $this->race = $race;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
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
        return 'Le chat court à une vitesse de ' . self::SPEEDING . 'km/h';
    }

    public function introduce()
    {
         $introduce = 'Le prénom du chat est ' . $this->getName() . '. Son poids est ' . $this->getWeight() . 'kgs. Sa race est ' . $this->getRace() . '. Il est agé de ' . $this->getAge() . ' ans.<br>';
        if ($this->age === 0) {
            $introduce = $introduce .' L\'age avec la valeur 0 signifie que l\'animal à moins de un an ou que cette information n\'a pas encore été renseigné.<br>';
        }

        return $introduce;
    }
}
