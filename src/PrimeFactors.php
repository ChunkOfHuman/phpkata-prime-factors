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
        $factors = array_map(function($val){
                       return $this->factorize($val);
                    }, $numbers);

        $highest = [];
        foreach($factors as $fac)
        {
            $count = array_count_values($fac);
            foreach($count as $num => $total)
            {
               if( ! isset($highest[$num]) OR $highest[$num] < $total)
               {
                  $highest[$num] = $total;
               }
            }
        }

        return array_reduce( array_keys($highest),
                function($total, $num) use ($highest){
                    return $total * pow($num, $highest[$num]);
                }, 1);
    }

    /**
     * Returns Greater common divider for the given numbers
     * @param  array $numbers
     * @return integer
     */
    public function gcd( $numbers )
    {
        if( count($numbers) == 1 ){
            return $numbers[0];
        }

        $factors = array_map(function($val){
                     return $this->factorize($val);
                  }, $numbers);

        return array_reduce(
                  call_user_func_array('array_intersect', $factors),
                  function($prev, $next){
                      return $prev * $next;
                  }, 1 );
    }

}
