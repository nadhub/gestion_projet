<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/helloWorld.php';

use \mageekguy\atoum;
use \recette;

class recetteTest extends atoum\test
{
    public function testGetName()
    {
        $recette = new \Recette();

        
    }
}


