<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/helloWorld.php';

use \mageekguy\atoum;
use \recette;

class HelloWorld extends atoum\test
{
    public function testSay()
    {
        $helloWorld = new \HelloWorld();

        $this->string($helloWorld->getHiAtoum())->isEqualTo('Hello World!');
        $this->string($helloWorld->getHiAtoum("henri"))->isEqualTo('Hello henri!');
    }
}
