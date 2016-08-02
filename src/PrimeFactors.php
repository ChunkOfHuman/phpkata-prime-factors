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
}
