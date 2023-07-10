<?php

namespace App\Helpers;

class MyAge
{
    public function __invoke() : string
    {
        $birthday = config('my-profile.birthday');
        $today = date("Y-m-d");
        $diff = date_diff(date_create($birthday), date_create($today));
        return $diff->format('%y');
    }
}
