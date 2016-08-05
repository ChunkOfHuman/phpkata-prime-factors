<?php

class PrimeFactors
{
    /**
     * Returns all factors for the given number
     * @param  integer $num
     * @return array
     */
    public function factorize($num)
    {
        $factors = [];

        for($divisor = 2; $num > 1; $divisor++)
        {
            for(; $num % $divisor == 0; $num /= $divisor)
            {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }

    /**
     * Returns Least common multiple for the given numbers
     * @param  array $numbers
     * @return integer
     */
    public function lcm( $numbers )
    {
        $factors = [];
        foreach( $numbers as $num )
        {
            $factors[] = $this->factorize($num);
        }

        if( count($factors) > 1 )
        {
            $multiples = call_user_func_array('array_intersect', $factors);
        }else{
            $multiples = $factors[0];
        }

        return min( $multiples );
    }
    
}
