<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/recette.php';

use \mageekguy\atoum;

class Recette extends atoum\test
{
    public function testGetName()
    {
        $recette = new \Recette();
        

    }
}



