<?php

namespace App\VO;

final readonly class ItemTag
{
    public function __construct(
        private string $name,
        private string $icon,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}
