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

    function it_factorizes_5_as_5()
    {
        $this->factorize(5)->shouldReturn([5]);
    }

    function it_factorizes_6_as_2_3()
    {
        $this->factorize(6)->shouldReturn([2,3]);
    }

    function it_factorizes_7_as_7()
    {
        $this->factorize(7)->shouldReturn([7]);
    }

    function it_factorizes_8_as_2_2_2()
    {
        $this->factorize(8)->shouldReturn([2,2,2]);
    }

    function it_factorizes_9_as_3_3()
    {
        $this->factorize(9)->shouldReturn([3,3]);
    }

    function it_factorizes_10_as_2_5()
    {
        $this->factorize(10)->shouldReturn([2,5]);
    }


}
