<?php

namespace App\Twig\Components;

use App\VO\ItemTag;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Tag
{
    private ItemTag $tag;

    public function getTag(): ItemTag
    {
        return $this->tag;
    }

    public function setTag(ItemTag $tag): void
    {
        $this->tag = $tag;
    }
}
