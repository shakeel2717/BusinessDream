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

function deliveredCommission($sponser, $user)
{
    $sponser = User::find($sponser);
    $user = User::find($user);
    // checking if sponser left and right are not free.
    if ($sponser->left != 'free' && $sponser->right != 'free') {
        $transaction = new Transaction();
        $transaction->user_id = $sponser->id;
        $transaction->amount = option("referCommision");
        $transaction->status = true;
        $transaction->sum = true;
        $transaction->type = 'reward';
        $transaction->reference = 'Reward Recieved form ' . $user->username;
        $transaction->save();

        // checking in downline
        if ($sponser->refer != 'default') {
            $uplineSponser = User::where('username', $sponser->refer)->first();
            if ($uplineSponser->left == $sponser->username && $uplineSponser->right_count >= $uplineSponser->left_count) {
                $transaction = new Transaction();
                $transaction->user_id = $uplineSponser->id;
                $transaction->amount = option("referCommisionLevel2");
                $transaction->status = true;
                $transaction->sum = true;
                $transaction->type = 'reward';
                $transaction->reference = 'Reward Recieved form ' . $user->username;
                $transaction->save();
            } elseif ($uplineSponser->right == $sponser->username && $uplineSponser->left_count >= $uplineSponser->right_count) {
                $transaction = new Transaction();
                $transaction->user_id = $uplineSponser->id;
                $transaction->amount = option("referCommisionLevel2");
                $transaction->status = true;
                $transaction->sum = true;
                $transaction->type = 'reward';
                $transaction->reference = 'Reward Recieved form ' . $user->username;
                $transaction->save();
            }
        }
    }
}
