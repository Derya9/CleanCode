<?php 
    function extractNumbersFromString($givenString) : array
    {
        $extractedNumbers = [];
        $splitStrings = explode(" ", $givenString);

        foreach($splitStrings as $string) 
        {
            if(is_numeric($string)) 
            {
                array_push($extractedNumbers, $string);
            }
        }
        return $extractedNumbers;
    }

    function transformNumbersToCharacters($numbers) : array
    {
        $characters = [];
        foreach ($numbers as $number) 
        {
            array_push($characters, chr($number));
        }
        return $characters;
    }