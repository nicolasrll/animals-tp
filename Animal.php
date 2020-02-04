<?php

class Animal
{
    protected $name = 'indéfinie';
    protected $race = 'indéfinie';
    protected $age = 0; // 0 egal age not uninformed or age < 1 like baby

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
}
