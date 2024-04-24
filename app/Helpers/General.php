<?php

class General
{
    public static function validateNumber($userInput, $maxNumber)
    {
        try {
            $num = intval($userInput);

            if ($num > 0 && $num <= $maxNumber) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
