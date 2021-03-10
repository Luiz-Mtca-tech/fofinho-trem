<?php
namespace scripts;

/**
 *
 * @author luiz
 *        
 */
class Carro
{
    public $marca = null;
    public int $portas = 2;
    private string $cv = null;
    public bool $power = false;
    private int $speed = 0;
    private float $acelação = 1.0;
    
    /**
     */
    public function __construct(int $cv, string $marca, int $pot = 2, float $acel)
    {
        
        $this->$cv = $cv;
        $this->$marca = $marca;
        $this->$portas = $pot;
        $this->$acelação = $acel;
    }
    
    public function digar() {
        $this->$power = true;
        
    }
    
    public function desligar() {
        $this->$power = false;
        
    }
    
    public  function acelerar() {
        while ($this->$ace == true) {
            $this->$vel++;
        }
    }
    
}


$velorian = Carro(100, );

