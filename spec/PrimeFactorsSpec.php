<?php

namespace spec;

use PrimeFactors;
use PhpSpec\ObjectBehavior;

class PrimeFactorsSpec extends ObjectBehavior
{
    /**
     * initializable test
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactors::class);
    }

    /**
     * factorization tests
     */
    function it_factorizes_1_as_empty()
    {
        $this->factorize(1)->shouldReturn([]);
    }

    function it_factorizes_2_as_2()
    {
        $this->factorize(2)->shouldReturn([2]);
    }

    function it_factorizes_3_as_3()
    {
        $this->factorize(3)->shouldReturn([3]);
    }

    function it_factorizes_4_as_2_2()
    {
        $this->factorize(4)->shouldReturn([2,2]);
    }

}
