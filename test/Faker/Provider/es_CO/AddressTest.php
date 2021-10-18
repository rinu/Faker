<?php

namespace Faker\Test\Provider\es_CO;

use Faker\Provider\es_CO\Address;
use Faker\Test\TestCase;

class AddressTest extends TestCase
{
    public function testPostCode()
    {
        $pattern = '/^\d{6}$/';

        $postCode = $this->faker->postCode();
        $this->assertRegExp($pattern, $postCode);
    }

    public function testCommunity()
    {
        $community = $this->faker->community();
        $this->assertSame(true, is_string($community) && $community !== '', 'Community name is not a valid string');
    }

    public function testState()
    {
        $state = $this->faker->state();
        $this->assertSame(true, is_string($state) && $state !== '', 'State name is not a valid string');
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
