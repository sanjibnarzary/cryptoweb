<?php
    /**
     * Find GCD of two numbers
     * Arguments should be GCD(int, int)
     */
    function gcd($a = 0, $b = 0){
        if(is_int($a) && is_int($b)){
            if($b == 0){
                return $a;
            }
            else{
                return gcd($b, $a%$b);
            }
        }
        else
            return '<i class="text-danger">Error: Can not parse numbers</i>';
            //return "First argument $a and second argument $b must be integer numbers i.e., 0, 1, 2, 3, ....\n";
    }

    /**
     * Find Modulo of two numbers
     * Argments should be modulo (int, int)
     */

    function modulo($a = 0, $b = 0){
        if(is_int($a) && is_int($b)){
            if($b < 1)
                return "mod n is expected to be greater than 0";
            $mod = 0;
            $c = floor($a/$b);
            $mod = $a - $c*$b;
            
            return $mod;
        }
    }
    /**
     * Finding multiplicatibe inverse of two numbers
     * 
     */
    function mult_inv($b = 0, $m = 0){
        if($b < 0){
            $b = modulo((int)$b, (int)$m);
        }
        if($m < 0){
            return '<span class="text-danger"> Error second number should not be less than 1</span>';
        }
        $a1 = 1; $a2 = 0; $a3 = $m;
        $b1 = 0; $b2 = 1; $b3 = $b;
        $loop = true;
        while($loop){
            if($b3 == 0){
                $loop=false;
                $num = modulo((int)$b2,(int)$m);
                return "no inverse";
            }
            if($b3 == 1){
                $loop =false;
                $num = modulo((int)$b2,(int)$m);
                return $num;
            }
            $q = floor($a3/$b3);
            $t1 = $a1 - $q*$b1;
            $t2 = $a2 - $q*$b2;
            $t3 = $a3 - $q*$b3; 
            $a1 = $b1;
            $a2 = $b2;
            $a3 = $b3;
            $b1 = $t1;
            $b2 = $t2;
            $b3 = $t3;
            $loop = true;
        }
    }
//print(mult_inv(77,411));