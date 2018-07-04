<?php

namespace App\Http\Traits;

use Config;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

trait RequestCleaner
{
    public static function cleanRequest($request, $field){
        return Purifier::clean($request->only($field));
    }
}
