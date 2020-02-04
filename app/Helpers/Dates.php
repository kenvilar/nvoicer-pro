<?php

namespace App\Helpers;

class Dates
{
    public static function pretty_dates($date)
    {
        return date('F Y, d', strtotime($date));
    }
}
