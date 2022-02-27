<?php
namespace Gematria;

class Gematria {
    
    const LETTERS = 'אבגדהוזחטיכלמנסעפצקרשת';
    const FINAL_LETTERS = 'םןץפך';
    
    function __construct($text) {
        $sum = 0;
        foreach (mb_str_split($text) as $letter){
            if (strpos(SELF::FINAL_LETTERS, $letter) !== false){
                $letter = mb_chr(mb_ord($letter) + 1); // convert final letter to regular
            }
            $position = mb_strpos(SELF::LETTERS, $letter);
            if ($position !== false){
                $counter = $position % 9 + 1;
                $power = intdiv($position, 9) ;
                
                $sum += (10 ** $power) * $counter;
            }
        }

        $this->sum = $sum;
    }

    function get(){
        return $this->sum;
    }

    function __toString(){
        return $this->get();
    }
}
