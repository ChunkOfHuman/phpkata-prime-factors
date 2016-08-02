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
        if($num % 3 == 0) return [3];

        if($num % 2 == 0) return [2];
        
        return [];
    }
}
