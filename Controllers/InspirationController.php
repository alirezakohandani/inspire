<?php
namespace Alirezakohadani\Inspire\Controllers;

use Illuminate\Http\Request;
use Alirezakohandani\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
    }
}
