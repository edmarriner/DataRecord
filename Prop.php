<?php

namespace DataRecord;

use Attribute;

#[Attribute]
class Prop
{
    public function __construct(
        public ?string $fromArray = null,
        public ?string $toArray = null,
        private ?string $arrayOf = null
    ){}
}
