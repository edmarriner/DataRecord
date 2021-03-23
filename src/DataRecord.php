<?php

namespace DataRecord;

use ReflectionClass;
use ReflectionParameter;

abstract class DataRecord
{
    public static function fromArray(array $data): static
    {
        $reflection = new ReflectionClass(static::class);
        $params = $reflection->getConstructor()->getParameters();

        $args = [];

        foreach($params as $param) {

            $propAttribute = $param->getAttributes('prop');

            $name = $param->name;

            if($propAttribute && $propAttribute[0]['fromArrayName']){
                $name = $propAttribute['fromArrayName'];
            }

            if (isset($data[$name])) {
                $args[$param->name] = $data[$name];
            } else {
                if($param->allowsNull()) {
                    $args[$param->name] = null;
                } else {
                    throw new \Exception('Missing parameter');
                }
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
