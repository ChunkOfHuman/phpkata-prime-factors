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

        for($prime = 2; $num > 1; $prime++)
        {
            while($num % $prime == 0)
            {
                $factors[] = $prime;

                $num /= $prime;
            }
        }

        return $factors;
    }
}
