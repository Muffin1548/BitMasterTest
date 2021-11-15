<?php

namespace GildedRose\products;

class AgedBrie extends Product
{
    public static $name = 'Aged Brie';

    /**
     * Качество увеличивается поэтому -1 (- на - дает +)
    */
    protected $corrosion = -1;

}
