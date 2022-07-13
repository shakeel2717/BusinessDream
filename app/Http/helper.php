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
        return positionFoundFree($user->username, "left");
    } elseif ($user->right == 'free') {
        return positionFoundFree($user->username, "right");
    } else {
        // getting left user Id
        $left_user_id = User::where('username', $user->left)->first();
        generateReferLinks($left_user_id->id);
    }
}


function positionFoundFree($refer, $position)
{
    $route = route('register', ['position' => $position, 'refer' => $refer]);
    $converted = Str::lower($route);
    echo $converted;
    return;
}


function myLeftUsers($user_id)
{
    $count = 0;
    for ($i = 0; $i < 100; $i++) {
        $user = User::find($user_id);
        if ($user->left != 'free') {
            $count++;
            // getting left user Id
            $left_user_id = User::where('username', $user->left)->first();
            $user_id = $left_user_id->id;
        }
    }
    return $count;
}

function myRightUsers($user_id)
{
    $count = 0;
    for ($i = 0; $i < 100; $i++) {
        $user = User::find($user_id);
        if ($user->right != 'free') {
            $count++;
            // getting right user Id
            $right_user_id = User::where('username', $user->right)->first();
            $user_id = $right_user_id->id;
        }
    }
    return $count;
}
