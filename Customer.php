<?php

namespace App;

use DataRecord\DataRecord;
use DataRecord\Numeric;
use DataRecord\Opts;
use DataRecord\Prop;

#[opts(fromArrayStyle: 'snake')]
class Customer extends DataRecord
{
    public function __construct(
        #[prop(fromArray: 'firstname', toArray: 'first_name')]
        public ?string $firstName = null,

        #[prop(toArray: 'last_name')]
        #[numeric(min: 1)]
        public ?string $lastName = null,

        /** @var array|null */
        public ?array $orderIds = null,

        /** @var array|null */
        public ?array $relatedCustomers = null
    ){}
}
