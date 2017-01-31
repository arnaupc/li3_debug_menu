<?php

use lithium\core\Environment;

if (!Environment::is('production')) {
    \li3_debugbar\extensions\storage\Debugger::init();
}
