<?php

namespace Faker\Test\Provider\es_AR;

use Faker\Provider\es_AR\Payment;
use Faker\Test\TestCase;

final class PaymentTest extends TestCase
{
    public function testValidCbu()
    {
        $cbu = $this->faker->cbu();
        $this->assertTrue($this->isValid($cbu));
    }

    /**
     * validator taken from https://github.com/pablorsk/cbu-validator-php/blob/master/src/Cbu.php
     *
     * @link https://github.com/pablorsk/cbu-validator-php/blob/master/src/Cbu.php
     * @param string $cbu
     * @return     boolean  True if valid, False otherwise.
     */
    private function isValid($cbu)
    {
        // Estrictamente sólo 22 números
        if (!preg_match('/[0-9]{22}/', $cbu)) {
            return false;
        }

        $arr = str_split($cbu);
        if ($arr[7] != self::getDigitoVerificador($arr, 0, 6)) {
            return false;
        }
        if ($arr[21] != self::getDigitoVerificador($arr, 8, 20)) {
            return false;
        }

        return true;
    }

    /**
     * Devuelve el dígito verificador para los dígitos de las posiciones "pos_inicial" a "pos_final"
     * de la cadena "$numero" usando clave 10 con ponderador 9713
     *
     * @param array $numero arreglo de digitos
     * @param integer $pos_inicial
     * @param integer $pos_final
     * @return integer digito verificador de la cadena $numero
     */
    private static function getDigitoVerificador($numero, $pos_inicial, $pos_final)
    {
        $ponderador = array(3, 1, 7, 9);
        $suma = 0;
        $j = 0;
        for ($i = $pos_final; $i >= $pos_inicial; $i--) {
            $suma = $suma + ($numero[$i] * $ponderador[$j % 4]);
            $j++;
        }
        return (10 - $suma % 10) % 10;
    }

    /**
     * @param string $cbu
     * @return string
     */
    public static function getBankId($cbu)
    {
        return substr($cbu, 0, 3);
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
