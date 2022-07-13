<?php

use App\Models\Option;

function option($name)
{
    $option = Option::where('name', $name)->first();
    return $option->value;
}
