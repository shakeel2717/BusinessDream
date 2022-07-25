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

function deliveredCommission($user_id)
{
    info("Count Start");
    $user = User::find($user_id);
    $downlineRefers = User::whereIn('id', countRefers($user_id))->get();
    $count = 1;
    
    foreach ($downlineRefers as $refer) {
        info("Loop for User: " . $refer->username);
        // $sponser = User::where('username', $refer->refer)->first();
        // info("User Inquirey for: " . $sponser);
        if ($refer != "") {
            if ($count == 1) {
                $profit = option("referCommisionLevel2");
            } else {
                $profit = option("referCommision");
            }
            if ($refer->left != "free" && $refer->right != "free" && $refer->right_count >= $refer->left_count) {
                info("refership Verifed!");
                $transaction = new Transaction();
                $transaction->user_id = $refer->id;
                $transaction->amount = $profit;
                $transaction->status = true;
                $transaction->sum = true;
                $transaction->type = 'reward';
                $transaction->reference = 'Reward Recieved form XXXX';
                $transaction->save();
                info("Profit Delivred to: " . $refer->username);
            }
        }
        $count++;
    }
}


function countRefers($user_id)
{
    $count = [];
    $user = User::find($user_id);

    // finding my upliner
    checkUpliner:
    info("Goto Start");
    $sponser = User::where('left', $user->username)->first();
    if ($sponser == "") {
        $sponser = User::where('right', $user->username)->first();
    }
    if ($sponser != "") {
        if ($sponser->left_count >= $sponser->right_count) {
            $count[] = $sponser->id;
            $user = User::find($sponser->id);
            info("Goto End");
            goto checkUpliner;
        }
    }

    return $count;
}
