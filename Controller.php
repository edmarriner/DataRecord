<?php
namespace App;

$cust = Customer::fromArray([
    'lastName' => 'Marriner',
    'firstName' => 'Edward',
]);

var_dump($cust->toArray());
