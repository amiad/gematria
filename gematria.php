<?php
namespace Gematria;

class Gematria {
    const LETTER_VALUES = [
        1 => 'אבגדהוזחט',
        10 => 'יכלמנסעפצ',
        100 => 'קרשת',
    ];
    const FINAL_LETTERS = 'םןץפך';
    
    function __construct($text) {
        $sum = 0;
        foreach (mb_str_split($text) as $letter){
            if (strpos(SELF::FINAL_LETTERS, $letter) !== false){
                $letter = mb_chr(mb_ord($letter) + 1); // convert final letter to regular
            }
            foreach (SELF::LETTER_VALUES as $value => $letters){
                $position = mb_strpos($letters, $letter);
                if ($position !== false){
                    $sum += ($position + 1) * $value;
                    break;
                }
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
