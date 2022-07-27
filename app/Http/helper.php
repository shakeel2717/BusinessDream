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
