<?php 
    function extractNumbersFromString($givenString) : array
    {
        $extractedNumbers = array();
        $explodedString = explode(" ", $givenString);

        foreach($explodedString as $string) {
            if(is_numeric($string)) {
                array_push($extractedNumbers, $string);
            }
        }
        return $extractedNumbers;
    }