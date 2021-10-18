<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Generator;
use Faker\Provider\uk_UA\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns()
    {
        self::assertEquals('Максим', $this->faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        self::assertEquals('Людмила', $this->faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        self::assertEquals('Миколайович', $this->faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        self::assertEquals('Миколаївна', $this->faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        self::assertEquals('Броваренко', $this->faker->lastName());
    }

    public function testIndividualIdentificationNumberReturnLength()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals(10, strlen($faker->IndividualIdentificationNumber()));
    }

    public function testIndividualIdentificationNumberWithBirthday()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('3476100763', $faker->IndividualIdentificationNumber(new \DateTime('1995-03-04')));
    }

    public function testIndividualIdentificationNumberFemale()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->assertEquals('3476157905', $faker->IndividualIdentificationNumber(new \DateTime('1995-03-04'), Person::GENDER_FEMALE));
    }

    public function testIndividualIdentificationNumberMale()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->assertEquals('3476157911', $faker->IndividualIdentificationNumber(new \DateTime('1995-03-04'), Person::GENDER_MALE));
    }

    public function testReallyOldPersonIndividualIdentificationNumberLength()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->assertEquals('0188900764', $faker->IndividualIdentificationNumber(new \DateTime('1905-03-04')));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
