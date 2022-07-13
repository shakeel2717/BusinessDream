<?php

use App\Models\Option;
use App\Models\Tid;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

function option($name)
{
    $option = Option::where('name', $name)->first();
    return $option->value;
}


function isActive($user_id)
{
    $user = User::find($user_id);
    return $user->status;
}

function generateReferLinks($user_id)
{
    $user = User::find($user_id);
    // checking if the user left side is free
    if ($user->left == 'free') {
        Log::info('left is free');
        return positionFoundFree($user->username, "left");
    } elseif ($user->right == 'free') {
        return positionFoundFree($user->username, "right");
    } else {
        Log::info('both are not free');
        // getting left user Id
        $left_user_id = User::where('username', $user->left)->first();
        generateReferLinks($left_user_id->id);
    }
}


function positionFoundFree($refer, $position)
{
    $route = route('register', ['position' => $position, 'refer' => $refer]);
    $converted = Str::lower($route);
    Log::info('Link Generated ' . $converted);
    echo $converted;
    return true;
}
