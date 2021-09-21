<?php

namespace Casper\CLType;

use Casper\Interfaces\ToBytesInterface;

abstract class CLType implements ToBytesInterface
{
    protected CLTypeTag $tag;

    protected string $linkTo;

    public function toString(): string
    {
        return $this->tag->getTagName();
    }

    /**
     * @return string|array
     */
    public function toJSON()
    {
        return $this->toString();
    }

    /**
     * @return int[]
     */
    public function toBytes(): array
    {
        return [$this->tag->getTagValue()];
    }
}
