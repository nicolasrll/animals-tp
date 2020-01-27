<?php
class Cat
{
    private $name;
    private $race;
    private $age;
    private $weight;
    private const SPEEDING = 40;

    public function __construct($name = '', $race = '', $age = 0, $weight = 4)
    {
        $this->name = $name;
        $this->race = $race;
        $this->age = $age;
        $this->weight = $weight;
        echo 'Vous avez adoptez un nouveau '.strtolower(get_class()).'.<br>';//Il s\'appelle '.$this->name.' et pèse '.$this->weight.'kgs. Il s\'agit d\'un '.$this->race.'. Il est agé de '.$this->age.'<br>';
    }


    public function getName()
    {
        if(empty($this->name))
        {
            return 'Le nom  \'est pas encore défini. <br>';
        }
        return $this->name;
    }

    public function getRace()
    {
        if(empty($this->race))
        {
            return 'La race n\'est pas encore définie. <br>';
        }
        return $this->race;
    }

    public function getAge()
    {
        if(empty($this->age))
        {
            return 'L\'age  n\'est pas encore défini. <br>';
        }
        return $this->age;
    }

    public function getWeight()
    {
        if(empty($this->weight))
        {
            return 'Le poid du chat  n\'est pas encore défini. <br>';
        }
        return $this->weight;
    }

    public function setName($name)
    {
        if(!is_string($name))
        {
            trigger_error('Veuillez définir le nom avec des lettres. <br>');
            return;
        }
        $this->name = $name;
    }

    public function setRace($race)
    {
        if(!is_string($race))
        {
            trigger_error('Veuillez définir la race avec des lettre. <br>');
            return;
        }
        $this->race = $race;
    }

    public function setAge($age)
    {
        if(!is_numeric($age))
        {
            trigger_error('Veuillez renseigner un nombre pour définir l\'age.<br>');
            return;
        }
        $this->age = $age;
    }

    public function setWeight($weight)
    {
        if(!is_numeric($weight))
        {
            trigger_error('Veuillez renseigner un nombre pour définir le poids.<br>');
            return;
        }
        $this->weight = $weight;
    }

    public function eating($quantity)
    {
        if(!is_numeric($quantity))
        {
            trigger_error('Veuillez renseigner un nombre pour définir la quantité de nourriture mangé.<br>');
        }

        if(0 == $this->getWeight())
        {
            $newWeight = 0;
        }
        else
        {
            $newWeight = $this->getWeight();
        }
        $newWeight += $quantity;
        $this->setWeight($newWeight);
    }

    public function running()
    {
        return 'Le chat court à une vitesse de '.self::SPEEDING.'km/h';
    }
}
