<?php

namespace tests\units;

require_once __DIR__ .'/../../atoum.phar';
require_once __DIR__ . '/../../HelloWorld.php';

use \vendor\atoum\bin;
//use \vendor\project;

class helloWorld extends atoum\test
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
                ->isEqualTo('Hi atoum !')
        ;
    }

}



