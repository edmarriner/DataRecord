<?php

namespace DataRecord;

interface Validator
{
    public function test(mixed $value): ValidatorResult;
}
