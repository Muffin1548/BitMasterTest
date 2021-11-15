<?php

namespace GildedRose\products;

class BackstagePasses extends Product
{
    public static $name = 'Backstage passes to a TAFKAL80ETC concert';

    /**
     * Качество увеличивается поэтому -1 (- на - дает +)
    */
    protected $corrosion = -1;


    /**
     * Новое значение в зависимости от дней до конца срока годности
    */
    protected function getCorrosion(): int
    {
        if($this->sellIn < 6){
            return $this->corrosion = -3;
        } elseif ($this->sellIn < 11){
            return  $this->corrosion = -2;
        }
        return $this->corrosion;
    }

}
