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

function totalRefers($user_id)
{
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    return $refers;
}


function balance($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Transaction::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}

function indirectRefers($user_id)
{
    $count = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $user = User::find($refer->id);
        $refers = User::where('refer', $user->username)->get();
        foreach ($refers as $refer) {
            $count[] = $refer->id;
            $user = User::find($refer->id);
            $refers = User::where('refer', $user->username)->get();
            foreach ($refers as $refer) {
                $count[] = $refer->id;
                $user = User::find($refer->id);
                $refers = User::where('refer', $user->username)->get();
                foreach ($refers as $refer) {
                    $count[] = $refer->id;
                    $user = User::find($refer->id);
                    $refers = User::where('refer', $user->username)->get();
                    foreach ($refers as $refer) {
                        $count[] = $refer->id;
                        $user = User::find($refer->id);
                        $refers = User::where('refer', $user->username)->get();
                        foreach ($refers as $refer) {
                            $count[] = $refer->id;
                            $user = User::find($refer->id);
                            $refers = User::where('refer', $user->username)->get();
                            foreach ($refers as $refer) {
                                $count[] = $refer->id;
                            }
                        }
                    }
                }
            }
        }
    }
    return $count;
}

function directRefers($user_id)
{
    $count = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $count[] = $refer->id;
    }

    return $count;
}



function totalRefersGet($user_id)
{
    $refers = User::whereIn('id', directRefers($user_id))->where('status', true)->get();
    $inDirectRefers = User::whereIn('id', indirectRefers($user_id))->where('status', true)->get();

    return $refers->count() + $inDirectRefers->count();
}


function totalIndirectCount($user_id)
{
    $count = 0;
    $level1Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 1')->get();
    foreach ($level1Refers as $level1) {
        // $count++;
        $level2Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 2')->get();
        foreach ($level2Refers as $level1) {
            $count++;
            $level3Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 3')->get();
            foreach ($level3Refers as $level1) {
                $count++;
                $level4Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 4')->get();
                foreach ($level4Refers as $level1) {
                    $count++;
                    $level5Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 5')->get();
                    foreach ($level5Refers as $level1) {
                        $count++;
                        $level6Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 6')->get();
                        foreach ($level6Refers as $level1) {
                            $count++;
                            $level7Refers = Transaction::where('type', 'reward')->where('user_id', $user_id)->where('note', 'level 7')->get();
                            foreach ($level7Refers as $level1) {
                                $count++;
                            }
                        }
                    }
                }
            }
        }
    }

    return $count;
}
