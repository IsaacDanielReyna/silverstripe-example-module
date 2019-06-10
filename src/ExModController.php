<?php

namespace IsaacDanielReyna\ExMod;

use PageController;
//use SilverStripe\Control\Director;
use SilverStripe\View\Requirements;

class ExModController extends PageController
{
    protected function init()
    {
        parent::init();

        Requirements::javascript('isaacdanielreyna/exmod:client/javascript/script.js');
        Requirements::css('isaacdanielreyna/exmod:client/css/style.css');
    }
}