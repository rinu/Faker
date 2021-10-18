<?php

namespace Faker\Test\Provider\es_CO;

use Faker\Provider\es_CO\PhoneNumber;
use Faker\Test\TestCase;

class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber()
    {
        $pattern = '/^((\+57|)(((300|301|302|303|304|305|31\d|320|321|322|323|324|350|351)\d{7})|((456|444|414|5|7|9)([1-8][2-8]\d{6}))))$/';

        $phoneNumber = str_replace(['-', ' '], [], $this->faker->phoneNumber());
        $this->assertRegExp($pattern, $phoneNumber);
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
