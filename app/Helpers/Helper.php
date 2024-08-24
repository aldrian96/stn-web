<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    public static function format_created_at($date)
    {
        // Create a Carbon instance from the date string
        $carbonDate = Carbon::parse($date);

        // Set the timezone to WIB (Asia/Jakarta)
        $carbonDate->setTimezone('Asia/Jakarta');

        // Format the datetime
        return $carbonDate->format('Y-m-d, H:i \W\I\B');
    }
    public static function formatToDate($date)
    {
        // Create a Carbon instance from the date string
        $carbonDate = Carbon::parse($date);

        // Set the timezone to WIB (Asia/Jakarta)
        $carbonDate->setTimezone('Asia/Jakarta');

        // Format the datetime
        return $carbonDate->format('d M Y');
    }
}
