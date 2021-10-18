<?php

namespace Faker\Test\Provider\es_CO;

use Faker\Provider\es_CO\Person;
use Faker\Test\TestCase;

class PersonTest extends TestCase
{
    public function testNuip()
    {
        $pattern = '/\d{10}/';

        $nuip = $this->faker->nuip();
        $this->assertRegExp($pattern, $nuip);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
