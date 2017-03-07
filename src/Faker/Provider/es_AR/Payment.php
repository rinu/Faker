<?php


namespace Faker\Provider\es_AR;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @link https://es.wikipedia.org/wiki/Clave_Bancaria_Uniforme
     */
    private static $banks = array(
        '005' => 'ABN AMRO Bank',
        '007' => 'Banco de Galicia',
        '011' => 'Banco Nación',
        '014' => 'Banco de la Provincia de Bs. As.',
        '015' => 'Industrial and Commercial Bank of China S.A.',
        '016' => 'Citibank S.A.',
        '017' => 'BBVA Banco Francés',
        '018' => 'The Bank of Tokyo-Mitsubishi',
        '020' => 'Banco de Córdoba',
        '027' => 'Banco Supervielle S.A.',
        '029' => 'Banco Ciudad',
        '034' => 'Banco Patagonia S.A.',
        '044' => 'Banco Hipotecario S.A.',
        '045' => 'Banco de San Juan S.A.',
        '046' => 'Banco do Brasil S.A.',
        '060' => 'Banco de Tucumán',
        '065' => 'Banco Municipal de Rosario',
        '072' => 'Banco Santander Río S.A.',
        '083' => 'Banco del Chubut',
        '086' => 'Banco de Santa Cruz S.A.',
        '093' => 'Banco de La Pampa',
        '094' => 'Banco de Corrientes S.A.',
        '097' => 'Banco Provincia del Neuquén',
        '150' => 'HSBC Bank Argentina S.A.',
        '191' => 'Banco Credicoop',
        '259' => 'Banco Itau Buen Ayre S.A.',
        '268' => 'Banco Pcia. de Tierra del Fuego',
        '285' => 'Banco Macro',
        '299' => 'Banco Comafi S.A.',
        '303' => 'Banco Finansur S.A.',
        '311' => 'Nuevo Banco del Chaco S.A.',
        '312' => 'MBA Banco De Inversiones S.A.',
        '315' => 'Banco Formosa S.A.',
        '319' => 'Banco CMF S.A.',
        '322' => 'Nuevo Banco Industrial de Azul',
        '325' => 'Deutsche Bank S.A.',
        '330' => 'Nuevo Banco de Santa Fe',
        '338' => 'Banco Santiago del Estero S.A.',
        '341' => 'Banco Más Ventas',
        '386' => 'Nuevo Banco de Entre Ríos S.A.',
    );

    /**
     * @link https://es.wikipedia.org/wiki/Clave_Bancaria_Uniforme
     */
    public static function cbu()
    {
        $block1 = static::randomElement(array_keys(static::$banks));
        $block1 .= static::numerify('####');
        $block1Numbers = str_split($block1);

        $sum1 = $block1Numbers[0] * 7
                + $block1Numbers[1] * 1
                + $block1Numbers[2] * 3
                + $block1Numbers[3] * 9
                + $block1Numbers[4] * 7
                + $block1Numbers[5] * 1
                + $block1Numbers[6] * 3;

        $block1 .= (10 - $sum1 % 10) % 10;

        $block2 = static::numerify('#############');
        $block2Numbers = str_split($block2);

        $sum2 = $block2Numbers[0] * 3
                + $block2Numbers[1] * 9
                + $block2Numbers[2] * 7
                + $block2Numbers[3] * 1
                + $block2Numbers[4] * 3
                + $block2Numbers[5] * 9
                + $block2Numbers[6] * 7
                + $block2Numbers[7] * 1
                + $block2Numbers[8] * 3
                + $block2Numbers[9] * 9
                + $block2Numbers[10] * 7
                + $block2Numbers[11] * 1
                + $block2Numbers[12] * 3;
        $block2 .= (10 - $sum2 % 10) % 10;
        return $block1 . $block2;
    }
}
