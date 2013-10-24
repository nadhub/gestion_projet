<?php

namespace vendor\project\tests\units;

require_once __DIR__ . '/../mageekguy.atoum.phar';

use \mageekguy\atoum;
use \vendor\project;

class helloWorld extends atoum\test
{
    public function testSay()
    {

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

        $helloWorld = new project\helloWorld();

        $this->string($helloWorld->say())->isEqualTo('Hello World!')
        ;
    }
}

