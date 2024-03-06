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

    function transformCharactersToNumbers($numbers) : array
    {
        // TODO: receive array of numbers (ascii values) transform them to characters and return as array
        $ascii = [];
        foreach ($numbers as $number) {
            array_push($ascii, $chr($number));
        }
        return $ascii;
    }