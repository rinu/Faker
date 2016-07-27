<?php

namespace Faker\Provider\es_MX;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameFather}} {{lastNameMother}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFather}} {{lastNameMother}}',
    );

    private static $stateAbbr = array(
        'AS', 'BC', 'BS', 'CC', 'CL', 'CM', 'CS', 'CH', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS'
    );

    /**
     * {@link} http://www.studentsoftheworld.info/penpals/stats.php3?Pays=MEX
     */
    protected static $firstNameMale = array('Carlos', 'Daniel', 'Jose', 'Eduardo', 'Luis', 'Jorge', 'Angel', 'Alejandro', 'Fernando', 'Sergio', 'Ivan', 'Jesus', 'Isaac', 'Cesar', 'Christian', 'Juan Carlos', 'Juan', 'Oscar', 'Adrian', 'Arturo', 'David', 'Diego', 'Enrique', 'Rafael', 'Emmanuel', 'Alex', 'Armando', 'Antonio', 'Rodrigo', 'Erick', 'Alberto', 'José Luis', 'Roberto', 'Andrès', 'Pablo', 'Jonathan', 'Alexis', 'Julio', 'Kevin', 'Edgar', 'Ramiro', 'Miguel', 'Martin', 'Francisco', 'Hugo', 'Ricardo', 'Victor', 'Ruben', 'Humberto', 'MARIO', 'Luis Fernando', 'Gabriel', 'Mauricio', 'Joaquín', 'Israel', 'Heriberto', 'Mariana', 'Rene', 'Raul', 'Hector', 'Hibram', 'Bryan', 'Horacio', 'Benjamin', 'Fede', 'Alan', 'Moises', 'Pepe', 'Fidel', 'Frank', 'Marco antonio', 'Chris', 'Michael', 'Omar', 'Saul Omar', 'Sebastian', 'Aldair', 'Diana', 'Gerardo', 'Eliseo', 'Brian', 'Alexander', 'Roger', 'Juan Manuel', 'Brandon', 'Yoet', 'Abraham', 'Cristian', 'Javier', 'Lalo', 'Marco', 'Maximiliano', 'Salvador', 'Fredy', 'Claudio', 'Esteban', 'Memo', 'Andre', 'Rivera', 'Josue');

    protected static $firstNameFemale = array('Diana', 'Daniela', 'Fernanda', 'Andrea', 'Ana', 'María', 'Alejandra', 'Mariana', 'Karla', 'Gabriela', 'Adriana', 'Jazmin', 'Samantha', 'Itzel', 'Rosa', 'Elizabeth', 'Viridiana', 'Brenda', 'Melissa', 'Sara', 'Jessica', 'Gaby', 'Miriam', 'Karen', 'Esmeralda', 'Laura', 'Frida', 'Alondra', 'Rocio', 'Karina', 'Paola', 'Marisol', 'Ali', 'Dulce', 'Valeria', 'Flor', 'Marian', 'Alexa', 'Tania', 'Paula', 'Michelle', 'Alma', 'Carolina', 'Claudia', 'Yazmin', 'Paulina', 'Cynthia', 'Liz', 'Lorna', 'Erika', 'Denisse', 'Clarisa', 'Perla', 'Natalia', 'Lizeth', 'Rebeca', 'Anahí', 'Fanny', 'LETICIA', 'Mayra', 'Maribel', 'Maria Fernanda', 'Marcela', 'Julia', 'Cecilia', 'Giselle', 'Violeta', 'Nelly', 'Sandy', 'Estefania', 'Abril', 'Cris', 'Silvia', 'Sofia', 'Lupita', 'Beatriz', 'Areli', 'Aimee', 'Victoria', 'Susy Benvidez', 'Noemi', 'Aranza', 'Cristina', 'Naomi', 'LeTy', 'Yesenia', 'Gabby', 'Eunice', 'Jenny', 'Leonor', 'Clarissa', 'Vale', 'Pasett', 'Sarai', 'Jhoaly', 'Annie', 'Angie', 'Dafne', 'Tonantzin', 'Lucy');

    /**
     * {@link} http://surnames.behindthename.com/submit/names/usage/mexican
     */
    protected static $lastNames = array('Abrego', 'Acero', 'Achio', 'Acuna', 'Aguayo', 'Agüero', 'Águila', 'Alarcón', 'Aldea', 'Alegre', 'Alejandro', 'Alires', 'Almonte', 'Alonso', 'Álvaro', 'Alza', 'Amaro', 'Ambrìz', 'Amore', 'Anguino', 'Apollo', 'Aponte', 'Aràbia', 'Aragon', 'Arands', 'Araquistain', 'Archuleta', 'Arellano', 'Arencibia', 'Arganda', 'Arguedas', 'Ariza', 'Arjona', 'Armenteros', 'Armijo', 'Arrisola', 'Arroyo', 'Arroz', 'Arviso', 'Ascencio', 'Atencio', 'Avamilano', 'Aveiro', 'Avelino', 'Avena', 'Avenida', 'Ávila', 'Azconovieta', 'Badilla', 'Badillo', 'Baez', 'Baeza', 'Baglietto', 'Balceiro', 'Baliao', 'Ballon', 'Banez', 'Barcelona', 'Bardomiano', 'Barrino', 'Barrios', 'Basora', 'Bea', 'Beas', 'Becerra', 'Bega', 'Belasco', 'Benibamonde', 'Bezos', 'Biurrarena', 'Blasco', 'Bolar', 'Bomba', 'Bragado', 'Bravo', 'Brell', 'Bretaña', 'Bustamante', 'Caba', 'Caballero', 'Cabaña', 'Cabañas', 'Cabunilas', 'Caceres', 'Caldera', 'Calderón', 'Calero', 'Calvete', 'Camacho', 'Camargo', 'Campuzano', 'Can', 'Canomanuel', 'Cansino', 'Capella', 'Capriel', 'Caravantes', 'Cárave', 'Cáraves', 'Cárdenas', 'Carrasco', 'Carrasquillo', 'Carrera', 'Casa', 'Casabuena', 'Casagrande', 'Castanati', 'Castañeda', 'Caulin', 'Cava', 'Ceballos', 'Cedena', 'Ceja', 'Celda', 'Cendejas', 'Cespedes', 'Chapin', 'Charvel', 'Chavos', 'Chica', 'Cintron', 'Comica', 'Contreras', 'Cordero', 'Córdoba', 'Córdova', 'Corona', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortéz', 'Covarrubias', 'Covarubbias', 'Creus', 'Criado', 'Cuba', 'Cuenca', 'Cuesta', 'Cuneo', 'Cunillera', 'Davila', 'Dealava', 'Debain', 'Delassandis', 'De la torre', 'Delfino', 'De lima', 'Delringo', 'Del río', 'Del rio', 'Del rosario', 'Del yando', 'Descalzo', 'Diego', 'Diez', 'Diola', 'Dos santos', 'Enciñias', 'Enoc', 'Enríquez', 'España', 'Espejo', 'Espinosa de los monteros', 'Estes', 'Estol', 'Estrada', 'Evidente', 'Ferrando', 'Figueroa', 'Fontañez', 'Franch', 'Galarraga', 'Galarza', 'Galíndez', 'Galindo', 'Gall', 'Gamarra', 'Gamio', 'Garnica', 'Garzon', 'Gat', 'Gato', 'Gil de montes', 'Ginebra', 'Gordillo', 'Granado', 'Granados', 'Grande', 'Griego', 'Griminesa', 'Guevera', 'Guillermez', 'Guzmán', 'Hay', 'Henares', 'Hilario', 'Hurtado', 'Ibáñes', 'Iglesias', 'Iniesta', 'Innerarity', 'Jara', 'Jaramillo', 'Jareño', 'Jeremias', 'Junious', 'Kenobi', 'Kuilan', 'Labrador', 'Lacerda', 'Laguna', 'Larrazabal', 'Lazo', 'Leal', 'Ledo', 'León', 'Leonado', 'Leones', 'Leyva', 'Linde', 'Liz', 'Llamas', 'Lorén', 'Lorona', 'Lozano', 'Lucero', 'Lucía', 'Lugo', 'Luján', 'Luna', 'Macarro', 'Madera', 'Madrid', 'Madrigal', 'Madrigale', 'Madriz', 'Maestre', 'Magano', 'Maldonado', 'Manuel', 'Marchant', 'Marco', 'Marrero', 'Marroquin', 'Martelle', 'Marzo', 'Mathias', 'Matias', 'Matta', 'Matute', 'Mauleon', 'Mejia', 'Méla', 'Melillo', 'Mercado', 'Mesa', 'Mesías', 'Milán', 'Miranda', 'Mondragon', 'Montaña', 'Montano', 'Monteblanco', 'Montemayor', 'Montenegro', 'Montoya', 'Monzon', 'Morell', 'Moros', 'Moyano', 'Muñoz', 'Murcia', 'Naranjo', 'Navarrete', 'Navarro', 'Negro', 'Neico', 'Nessim', 'Niave', 'Nieto', 'Niño', 'Odilia', 'Orozco', 'Osuna', 'Pacana', 'Pacheco', 'Padilla', 'Palafox', 'Palencia', 'Pantoja', 'Pardo', 'Paz', 'Pedrosa', 'Pedroza');


    public function lastName()
    {
        return static::randomElement(static::$lastName).' '.static::randomElement(static::$lastName);
    }

    public function lastNameMother()
    {
        return static::randomElement(static::$lastName);
    }

    public function lastNameFather()
    {
        return static::randomElement(static::$lastName);
    }
    /**
     * generates CURP
     * 
     * @param      string  $firstName  The first name
     * @param      string  $lastName   The last name
     * @param      string  $gender     The gender
     * @param      \DateTime  $birthDate  The birth date
     * @param      string  $state      The person birth state
     *
     * @return     string  generated curp
     * 
     * @link       https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js ported from this
     * @link       https://en.wikipedia.org/wiki/Unique_Population_Registry_Code
     */
    public static function curp($firstName = null, $lastName = null, $gender = null, $birthDate = null, $state = null)
    {
        
    }
}