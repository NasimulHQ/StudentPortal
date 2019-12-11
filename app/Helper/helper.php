<?php

if (!function_exists('cgpaCalculator'))
{
    function cgpaCalculator($number)
    {
        $cgpa = '';
        if ($number <= 32)
        {
            $cgpa = 'F';
        }else if($number > 32 && $number <= 39){
            $cgpa = 'D';
        }else if($number > 39 && $number <= 49){
            $cgpa = 'C';
        }else if($number > 49 && $number <= 59){
            $cgpa = 'B';
        }else if($number > 59 && $number <= 69){
            $cgpa = 'A-';
        }else if($number > 69 && $number <= 79){
            $cgpa = 'A';
        }else if($number > 79){
            $cgpa = 'A+';
        }

        return $cgpa;
    }

}