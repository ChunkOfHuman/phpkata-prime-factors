<?php

namespace spec;

use PrimeFactors;
use PhpSpec\ObjectBehavior;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactors::class);
    }
}
