<?php

class Machine
{
    protected $wheel;

    public function __construct($wheel)
    {
        $this->wheel = $wheel;
    }

    public function showCountWheels()
    {
        return get_class($this). " have - ".$this->wheel." wheels.";
    }
}

class Auto extends Machine
{
    private $name;

    public function __construct($name,$wheel)
    {
        $this->name = $name;
        parent::__construct($wheel);
    }

    public function showInfo()
    {
        return $this->showCountWheels()."Name is - ".$this->name;
    }
}

class Moto extends Machine
{

    private $name;

    public function __construct($name,$wheel)
    {
        $this->name = $name;
        parent::__construct($wheel);
    }

    public function showInfo()
    {
        return $this->showCountWheels()."Name is - ".$this->name;
    }
}


$auto = new Auto('BMW',4);

$moto = new Moto('harly',2);

echo $auto->showInfo();
echo "<br>";
echo $moto->showInfo();