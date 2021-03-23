<?php
namespace App;

use DataRecord\DataRecord;
use DataRecord\Opts;
use DataRecord\Prop;
use Validators\DataRecord\Numeric;

require __DIR__ . '/vendor/autoload.php';

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


$cust = Customer::fromArray([
    'lastName' => 'Marriner',
    'firstName' => 'Edward',
]);

var_dump($cust->toArray());
