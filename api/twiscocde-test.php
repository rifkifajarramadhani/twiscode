<?php

    function binToDec($bin)
    {
        $bin = str_split($bin);
        $bin = array_reverse($bin);

        $n = 0;
        $dec = 0;

        foreach($bin as $val)
        {
            $i = $val * pow(2, $n);
            $dec += $i;
            $n++;
        }

        return $dec;
    }

    function decToBin($dec)
    {
        $bin; 
        $i = 0;
        
        while ($dec>0)  
        {
            $bin[$i] = $dec % 2; 
            $dec = (int)($dec / 2); 
            $i++; 
        }
        for ($j = $i - 1; $j >= 0; $j--)
        {
            echo $bin[$j];
        }
    }

    function palindrome($string){
        
        $strArr = array();
        for($i = 0; $i < strlen($string); $i++)  
        {  
            $palindrome = true; 
            $offset = 1; 
            
            while($palindrome)  
            { 
                $word = substr($string, $i - $offset, ($offset * 2) + 1 ); 
                if($word == strrev($word)) { 
                    $strArr[$word] = strlen($word);           
                } else { 
                    $palindrome = false; 
                } 

                $offset++; 
            }
        } 

        $finArr = max($strArr);
        echo $key = array_search($finArr, $strArr);
    }

?>