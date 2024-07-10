<?php

namespace App\Twig\Components;

use App\VO\Item;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class TestItem
{
    private Item $item;

    public function getItem(): Item
    {
        return $this->item;
    }

    public function setItem(Item $item): void
    {
        $this->item = $item;
    }
}
