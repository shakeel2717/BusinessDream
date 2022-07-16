<?php

use App\Models\Option;
use App\Models\Tid;
use App\Models\Transaction;
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

function generateReferLinksUser($user_id, $position)
{
    Log::info('Boot');
    $user = User::find($user_id);
    $downline = User::where('username', $user->$position)->first();
    if ($position == 'left') {
        if ($downline->left == "free") {
            return ['user' => $downline->username, 'position' => 'left'];
        } else {
            return generateReferLinksUser($downline->id, $position);
        }
    } elseif ($position == 'right') {
        if ($downline->right == "free") {
            return ['user' => $downline->username, 'position' => 'right'];
        } else {
            return generateReferLinksUser($downline->id, $position);
        }
    }
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
        return "You not have Free Space in your downline, Please Refer new Sponser to your donwline team. ";
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


function balance($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Transaction::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}
