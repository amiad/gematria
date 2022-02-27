<?php

class Gematria {
    const LETTER_VALUES = [
        1 => 'אבגדהוזחט',
        10 => 'כלמנסעפצ',
        100 => 'קרשת',
    ];
    const FINAL_LETTERS = 'םןץפך';
    
    function __construct($text) {
        $sum = 0;
        foreach (str_split($text) as $letter){
            if (strpos(SELF::FINAL_LETTERS, $letter) !== false){
                $letter = mb_chr(mb_ord($letter) + 1); // convert final letter to regular
            }
            foreach (SELF::LETTER_VALUES as $value => $letters){
                $postion = strpos($letters, $letter);
                if ($postion !== false){
                    $sum += ($postion + 1) * $value;
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