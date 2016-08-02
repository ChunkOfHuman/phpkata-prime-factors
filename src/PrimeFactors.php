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

        while($num % 2 == 0){
            $factors[] = 2;
            $num /= 2;
        }

        while($num % 3 == 0)
        {
            $factors[] = 3;
            $num /= 3;
        }

        while($num % 5 == 0)
        {
            $factors[] = 5;
            $num /= 5;
        }

        return $factors;
    }
}
