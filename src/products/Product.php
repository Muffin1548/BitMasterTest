<?php

namespace GildedRose\products;

use GildedRose\Item;

abstract class Product
{
    /**
     * @var string
     */
    public static $name;

    /**
     * @var int
     */
    protected $quality;

    /**
     * @var int
     */
    protected $sellIn;

    /**
     * @var int
     */
    protected $corrosion = 1;

    /**
     * @var int
     */
    const MAX_QUALITY = 50;

    /**
     * @var int
     */
    const MIN_QUALITY = 0;

    public function __construct(Item $item)
    {
        $this->quality = $item->quality;
        $this->sellIn = $item->sell_in;
    }

    /**
     * Метод изменения качества
     *
     */
    public function update(): void
    {
        $this->setSellIn();

        if ($this->sellIn < 0) {
            $this->quality -= $this->quality;
        } else {
            $this->quality -= $this->getCorrosion();
        }

        $this->correctQuality();
    }

    /**
     * Коррекция качества
     */
    protected function correctQuality()
    {
        if($this->quality < self::MIN_QUALITY){
            $this->quality = self::MIN_QUALITY;
        } elseif ($this->quality > self::MAX_QUALITY){
            $this->quality = self::MAX_QUALITY;
        }
    }

    /**
     * Метод вывода данных
    */
    public function __toString(): string
    {
        return "{$this::$name}, {$this->sellIn}, {$this->quality}";
    }

    /**
     * Функция уменьшения дней до конца срока годности
    */
    public function setSellIn(): int
    {
        return $this->sellIn -= 1;
    }

    /**
     * Получение значения коррозии
    */
    protected function getCorrosion(): int
    {
        return $this->corrosion;
    }
}
