<?php

namespace App\VO;

final readonly class Item
{
    public function __construct(
        private string $name,
        /** @var ItemTag[] */
        private array $tagsA,
        /** @var ItemTag[] */
        private array $tagsB,
        /** @var ItemTag[] */
        private array $tagsC,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    /** @return ItemTag[] */
    public function getTagsA(): array
    {
        return $this->tagsA;
    }

    /** @return ItemTag[] */
    public function getTagsB(): array
    {
        return $this->tagsB;
    }

    /** @return ItemTag[] */
    public function getTagsC(): array
    {
        return $this->tagsC;
    }
}
