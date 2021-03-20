<?php

namespace DataRecord;

abstract class DataRecord
{
    public static function fromArray(array $data): static
    {
        $reflection = new ReflectionClass(static::class);
        $params = $reflection->getConstructor()->getParameters();
        $args = [];
        foreach ($params as $param) {
            if (isset($data[$param->name])) {
                $args[$param->name] = $data[$param->name];
            } else {
                $args[$param->name] = null;
            }
        }
        return new static(...array_values($args));
    }

    public function toArray(): array
    {
        return (array)$this;
    }

    public function validate()
    {

    }
}
