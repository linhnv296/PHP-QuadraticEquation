<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    public $delta;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function geta()
    {
        return $this->a;
    }
    function getb()
    {
        return $this->b;
    }
    function getc()
    {
        return $this->c;
    }
    function getDiscriminant()
    {
        if ($this->a <> 0 && $this->b && $this->c) {
            $this->delta = ($this->b ** 2) - (4 * $this->a * $this->c);
            echo "Delta: ".$this->delta."<br>";
            if ($this->delta >= 0) {
                $result1 = $this->getRoot1().$this->getRoot2();
                return $result1;
            }
            else{
                return "Phuong trinh vo nghiem";
            }
        }
    }

    function getRoot1()
    {
        $r1 = "Nghiem 1: ".(-$this->b + pow(($this->b ** 2 - (4 * $this->a * $this->c)),0.5)) / 2 * $this->a."<br>";
        return $r1;
    }

    function getRoot2()
    {
        $r2 = "Nghiem 2: ".(-$this->b - pow($this->b ** 2 - (4 * $this->a * $this->c),0.5)) / 2 * $this->a."<br>";
        return $r2;
    }
}

$tinh = new QuadraticEquation(1, 2, 1);
echo "a: ".$tinh->geta()."<br>";
echo "b: ".$tinh->getb()."<br>";
echo "c: ".$tinh->getc()."<br>";
echo $tinh->getDiscriminant();

$tinh1 = new QuadraticEquation(1, 2, 3);

echo $tinh1->getDiscriminant();