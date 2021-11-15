<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\products\AgedBrie;
use GildedRose\products\BackstagePasses;
use GildedRose\products\ConjuredManaСake;
use GildedRose\products\DexterityVest;
use GildedRose\products\Elixir;
use GildedRose\products\Product;
use GildedRose\products\Sulfuras;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            switch ($item->name) {
                case Sulfuras::$name:
                    $this->items[] = new Sulfuras($item);
                    break;
                case AgedBrie::$name:
                    $this->items[] = new AgedBrie($item);
                    break;
                case Elixir::$name:
                    $this->items[] = new Elixir($item);
                    break;
                case DexterityVest::$name:
                    $this->items[] = new DexterityVest($item);
                    break;
                case BackstagePasses::$name:
                    $this->items[] = new BackstagePasses($item);
                    break;
                case ConjuredManaСake::$name:
                    $this->items[] = new ConjuredManaСake($item);
                    break;
            }
        }
    }

    public function updateQuality(): void
    {
        /** @var $item Product */
        foreach($this->items as $item) {
            $item->update();
        }
    }

    /**
     *
     * @return Item[]
    */
    public function getItems(): array
    {
        return $this->items;
    }
}
