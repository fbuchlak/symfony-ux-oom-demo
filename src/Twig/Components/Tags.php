<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Tags
{
    /** @var ItemTag[] */
    private array $tags;

    /** @return ItemTag[] */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * @param ItemTag[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }
}
