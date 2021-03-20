<?php

namespace DataRecord;

use Attribute;

#[Attribute]
class Opts
{
    public function __construct(
        public ?string $fromArrayStyle = null,
        public ?string $toArrayStyle = null
    ){}
}
