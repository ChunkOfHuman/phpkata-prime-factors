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

        // Get prime factors highest exponent value
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
     * Returns Greater common divisor for the given numbers
     * @param  array $numbers
     * @return integer
     */
    public function gcd( $numbers )
    {
        $factors = array_map(function($val){
                     return $this->factorize($val);
                  }, $numbers);

        // Get common prime factors for each occurrence
        $common = array_count_values($factors[0]);
        if( count($factors) > 1 ){
          for($i = 1; $i < count($factors); $i++)
          {
              $curr = array_count_values($factors[$i]);
              foreach($common as $num => $times){
                 if( ! isset($curr[$num]) ){
                    unset($common[$num]);
                    continue;
                 }
                 if( $curr[$num] < $common[$num] ){
                    $common[$num] = $curr[$num];
                 }
              }
          }
        }

        return array_reduce( array_keys($common),
                  function($total, $num) use ($common){
                      return $total * pow($num, $common[$num]);
                  }, 1 );
    }

}
