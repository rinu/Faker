<?php

namespace Faker\Test\Provider\es_MX;

use Faker\Provider\es_MX\Payment;
use Faker\Test\TestCase;

class PaymentTest extends TestCase
{
    public function testClabe()
    {
        $clabe = $this->faker->clabe();
        $this->assertTrue($this->validateClabe($clabe));
    }

    public function validateClabe($clabe)
    {
        $crc = substr($clabe, -1);
        $number = substr($clabe, 0, -1);

        $weights = array(3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7);

        $weighted = array_map(function ($i, $w) {
            return substr(($i * $w) % 10, -1);
        }, str_split($number), $weights);

        $product = array_sum($weighted) % 10;
        return $crc == (10 - $product);
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
