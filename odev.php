<?php

abstract class Shape
{
    public $kenar1;
    
    abstract public function area();
    abstract public function around();
}

class Dikdortgen extends Shape
{   public $kenar2;

    public function __construct($k1,$k2){
        $this->kenar1 = $k1;
        $this->kenar2 = $k2;
    }


    function around()
    {
        return 2 * ($this->kenar1 + $this->kenar2);
    }

    function area()
    {
        
        return $this->$kenar1 * $this->$kenar2;
    }
}

class Kare extends Shape
{
    public function __construct($k1){
        $this->kenar1 = $k1;
    }


    function around()
    {
        return 4 * $this->kenar1 ;
    }

    function area()
    {
        
        return $this->$kenar1 * $this->$kenar1;
    }
}

class Ucgen extends Shape
{
    public $kenar2;
    public $kenar3;
    public $u;

    public function __construct($k1,$k2,$k3){
        $this->kenar1 = $k1;
        $this->kenar2 = $k2;
        $this->kenar3 = $k3;
        $this->u = ($this->kenar1 + $this->kenar2 + $this->kenar3) /2;
    }

    function around()
    {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }

    function area()
    {
        return bcsqrt($this->u * ($this->u -$this->kenar1) * ($this->u -$this->kenar2 ) * ($this->u -$this->kenar3));
    }
}