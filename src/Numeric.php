<?php

namespace DataRecord;

use Attribute;

#[Attribute]
class Numeric implements Validator
{
    public function __construct(
        public ?float $min = null,
        public ?float $max = null,
    ){}

    public function test(mixed $value): ValidatorResult
    {
        if ($this->min !== null && $value < $this->min) {
            $error = sprintf('%d is less than minimum %d', $value, $this->min);
            return new ValidatorResult(false, $error);
        }

        if ($this->max !== null && $value > $this->max) {
            $error = sprintf('%d is more than maximum %d', $value, $this->max);
            return new ValidatorResult(false, $error);
        }

        return new ValidatorResult(true);
    }
}
