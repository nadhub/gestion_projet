<?php

namespace tests\units;

require_once __DIR__ .'/../../atoum.phar';
require_once __DIR__ . '/../../HelloWorld.php';

use \vendor\atoum\bin;
//use \vendor\project;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/helloWorld.php';

use \mageekguy\atoum;
use \recette;

class HelloWorld extends atoum\test
{
    public function testSay()
    {

        var_dump(__DIR__);

        // création d’une nouvelle instance de la classe à tester
        $helloToTest = new HelloWorld();
 
        $this
            // nous testons que la méthode getHiAtoum retourne bien
            // une chaîne de caractère...
            ->string($helloToTest->getHiAtoum())
                // ... et que la chaîne est bien celle attendue,
                // c’est-à-dire 'Hi atoum !'
                ->isEqualTo('Hi atoum !');

        $helloWorld = new \HelloWorld();

        $this->string($helloWorld->getHiAtoum())->isEqualTo('Hello World!');

    }

}



