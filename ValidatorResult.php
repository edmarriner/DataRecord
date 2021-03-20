<?php

namespace DataRecord;

class ValidatorResult
{
    public function __construct(
        public bool $success,
        public ?string $errorMessage = null
    ){}
}
