<?php

namespace GildedRose\products;

class Sulfuras extends Product
{
    public static $name = 'Sulfuras, Hand of Ragnaros';

    /**
     * Не изменяемое качество
    */
    protected $quality = 80;

    /**
     * У Сульфураса не меняется качество
    */
    public function update(): void {    }
}
