<?php

namespace Faker\Provider\uk_UA;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    ];

    protected static $femaleNameFormats = [
        '{{lastName}} {{firstNameFemale}} {{middleNameFemale}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
    ];

    protected static $firstNameMale = [
        'Євген', 'Адам', 'Олександр', 'Олексій', 'Анатолій', 'Андрій', 'Антон', 'Артем', 'Артур', 'Борис', 'Вадим', 'Валентин', 'Валерій',
        'Василь', 'Віталій', 'Володимир', 'Владислав', 'Геннадій', 'Георгій', 'Григорій', 'Данил', 'Данило', 'Денис', 'Дмитро',
        'Євгеній', 'Іван', 'Ігор', 'Йосип', 'Кирил', 'Костянтин', 'Лев', 'Леонід', 'Максим', 'Мирослав', 'Михайло', 'Назар',
        'Микита', 'Микола', 'Олег', 'Павло', 'Роман', 'Руслан', 'Сергій', 'Станіслав', 'Тарас', 'Тимофій', 'Федір',
        'Юрій', 'Ярослав', 'Богдан', 'Болеслав', 'В\'ячеслав', 'Валерій', 'Всеволод', 'Віктор', 'Ілля',
    ];

    protected static $firstNameFemale = [
        'Олександра', 'Олена', 'Алла', 'Анастасія', 'Анна', 'Валентина', 'Валерія', 'Віра', 'Вікторія', 'Галина', 'Дар\'я', 'Діана', 'Євгенія',
        'Катерина', 'Олена', 'Єлизавета', 'Інна', 'Ірина', 'Катерина', 'Кіра', 'Лариса', 'Любов', 'Людмила', 'Маргарита', 'Марина',
        'Марія', 'Надія', 'Наташа', 'Ніна', 'Оксана', 'Ольга', 'Поліна', 'Раїса', 'Світлана', 'Софія', 'Тамара', 'Тетяна',
        'Юлія', 'Ярослава',
    ];

    protected static $middleNameMale = [
        'Олександрович', 'Олексійович', 'Андрійович', 'Євгенович', 'Сергійович', 'Іванович',
        'Федорович', 'Тарасович', 'Васильович', 'Романович', 'Петрович', 'Миколайович',
        'Борисович', 'Йосипович', 'Михайлович', 'Валентинович', 'Янович', 'Анатолійович',
        'Євгенійович', 'Володимирович',
    ];

    protected static $middleNameFemale = [
        'Олександрівна', 'Олексіївна', 'Андріївна', 'Євгенівна', 'Сергіївна', 'Іванівна',
        'Федорівна', 'Тарасівна', 'Василівна', 'Романівна', 'Петрівна', 'Миколаївна',
        'Борисівна', 'Йосипівна', 'Михайлівна', 'Валентинівна', 'Янівна', 'Анатоліївна',
        'Євгеніївна', 'Володимирівна',
    ];

    protected static $lastName = [
        'Антоненко', 'Василенко', 'Васильчук', 'Васильєв', 'Гнатюк', 'Дмитренко',
        'Захарчук', 'Іванченко', 'Микитюк', 'Павлюк', 'Панасюк', 'Петренко', 'Романченко',
        'Сергієнко', 'Середа', 'Таращук', 'Боднаренко', 'Броваренко', 'Броварчук', 'Кравченко',
        'Кравчук', 'Крамаренко', 'Крамарчук', 'Мельниченко', 'Мірошниченко', 'Шевченко', 'Шевчук',
        'Шинкаренко', 'Пономаренко', 'Пономарчук', 'Лисенко',
    ];

    /**
     * Return male middle name
     *
     * @example 'Іванович'
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Івановна'
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @param string|null $gender A gender the middle name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     *
     * @return string Middle name
     */
    public function middleName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName(static::randomElement([
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        ]));
    }

    /**
     * Individual Identification Number
     *
     * @param DateTime $birthdate Date when person is born
     * @param string   $sex       'male' for male or 'female' for female
     * 
     * @link https://en.wikipedia.org/wiki/National_identification_number#Ukraine
     * @link https://github.com/iiifx-production/ukraine-identification-number Check digit calculation algorithm
     *
     * @return string 10 digit number, for example: 34713401358
     */
    public static function individualIdentificationNumber($birthdate = null, $sex = null)
    {
        $birthdate = $birthdate ?: \Faker\Provider\DateTime::dateTimeThisCentury();
        $sex = $sex ?: self::randomElement(array(static::GENDER_MALE, static::GENDER_FEMALE));

        // real life examples shows that the birth date itself is also included in counting the days from 1900-01-01
        $iid = str_pad($birthdate->diff(new \DateTime('1900-01-01'))->days + 1, 5, '0', STR_PAD_LEFT);
        $iid = $iid . static::numerify('###');
        $iid = $iid . ($sex == static::GENDER_MALE ? static::numberBetween(0, 4) * 2 + 1 : static::numberBetween(0, 4) * 2);

        $weights = array(-1, 5, 7, 9, 4, 6, 10, 5, 7);
        $checksum = 0;
        for ($i = 0; $i < count($weights); $i++) {
            $checksum += $weights[$i] * $iid[$i];
        }
        $checksum = $checksum % 11 % 10;
        $iid = $iid . $checksum;

        return $iid;
    }
}
