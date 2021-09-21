<?php

namespace Casper\CLType;

class CLU64Type extends CLType
{
    public function __construct()
    {
        $this->tag = new CLTypeTag(CLTypeTag::U64);
        $this->linkTo = CLU64::class;
    }
}
