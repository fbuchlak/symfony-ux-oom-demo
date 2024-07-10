<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class TestItems
{
    /** @var Item[] */
    private array $items;

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}
