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

function generateReferLinksUser($user_id)
{
    $user = User::find($user_id);
    if ($user->left == "free") {
        return ['user' => $user->username, 'position' => 'left'];
    } elseif ($user->right == "free") {
        return ['user' => $user->username, 'position' => 'right'];
    } else {
        // getting the left downline
        $downline = User::where('username', $user->left)->first();
        if ($downline->left == "free") {
            return ['user' => $downline->username, 'position' => 'left'];
        } elseif ($downline->right == "free") {
            return ['user' => $downline->username, 'position' => 'right'];
        } else {
            $downlineRight = User::where('username', $user->right)->first();
            if ($downlineRight->left == "free") {
                return ['user' => $downlineRight->username, 'position' => 'left'];
            } elseif ($downlineRight->right == "free") {
                return ['user' => $downlineRight->username, 'position' => 'right'];
            } else {
                return generateReferLinksUser($downlineRight->id);
            }
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


function positionFoundFree($refer)
{
    $route = route('register', ['refer' => $refer]);
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


function allRefers($user_id)
{
    $count = [];
    $allRefers = User::whereIn('id', getAllRefersBinary($user_id))->get();
    foreach ($allRefers as $refer) {
        getLeftRight($refer->id);
    }
}

function getLeftRight($user)
{
    $allRefersCount = [];
    if ($user->left != 'free') {
        $leftRecord = User::where('username', $user->left)->first();
        $allRefersCount[] = $leftRecord->id;
    }

    if ($user->right != 'free') {
        $rightRecord = User::where('username', $user->right)->first();
        $allRefersCount[] = $rightRecord->id;
    }
    return $allRefersCount;
}



function getAllRefersBinary($user_id)
{
    $refers = [];
    $user = User::find($user_id);
    $downlines = User::where('refer', $user->username)->get();
    foreach ($downlines as $downline) {
        $refers[] = $downline->id;
        $downlinesSecondLevel = User::where('refer', $downline->username)->get();
        foreach ($downlinesSecondLevel as $downlineSecondLevel) {
            $refers[] = $downlineSecondLevel->id;
            $downlinesThirdLevel = User::where('refer', $downlineSecondLevel->username)->get();
            foreach ($downlinesThirdLevel as $downlineThirdLevel) {
                $refers[] = $downlineThirdLevel->id;

                $downlinesFourthLevel = User::where('refer', $downlineThirdLevel->username)->get();
                foreach ($downlinesFourthLevel as $downlineFourthLevel) {
                    $refers[] = $downlineFourthLevel->id;

                    $downlinesFifthLevel = User::where('refer', $downlineFourthLevel->username)->get();
                    foreach ($downlinesFifthLevel as $downlineFifthLevel) {
                        $refers[] = $downlineFifthLevel->id;

                        $downlinesSixthLevel = User::where('refer', $downlineFifthLevel->username)->get();
                        foreach ($downlinesSixthLevel as $downlineSixthLevel) {
                            $refers[] = $downlineSixthLevel->id;

                            $downlinesSeventhLevel = User::where('refer', $downlineSixthLevel->username)->get();

                            foreach ($downlinesSeventhLevel as $downlineSeventhLevel) {
                                $refers[] = $downlineSeventhLevel->id;

                                $downlinesEighthLevel = User::where('refer', $downlineSeventhLevel->username)->get();

                                foreach ($downlinesEighthLevel as $downlineEighthLevel) {
                                    $refers[] = $downlineEighthLevel->id;

                                    $downlinesNinthLevel = User::where('refer', $downlineEighthLevel->username)->get();
                                    foreach ($downlinesNinthLevel as $downlineNinthLevel) {
                                        $refers[] = $downlineNinthLevel->id;

                                        $downlinesTenthLevel = User::where('refer', $downlineNinthLevel->username)->get();
                                        foreach ($downlinesTenthLevel as $downlineTenthLevel) {
                                            $refers[] = $downlineTenthLevel->id;

                                            $downlinesEleventhLevel = User::where('refer', $downlineTenthLevel->username)->get();
                                            foreach ($downlinesEleventhLevel as $downlineEleventhLevel) {
                                                $refers[] = $downlineEleventhLevel->id;

                                                $downlinesTwelthLevel = User::where('refer', $downlineEleventhLevel->username)->get();
                                                foreach ($downlinesTwelthLevel as $downlineTwelthLevel) {
                                                    $refers[] = $downlineTwelthLevel->id;

                                                    $downlinesThirteenthLevel = User::where('refer', $downlineTwelthLevel->username)->get();
                                                    foreach ($downlinesThirteenthLevel as $downlineThirteenthLevel) {
                                                        $refers[] = $downlineThirteenthLevel->id;

                                                        $downlinesFourteenthLevel = User::where('refer', $downlineThirteenthLevel->username)->get();
                                                        foreach ($downlinesFourteenthLevel as $downlineFourteenthLevel) {
                                                            $refers[] = $downlineFourteenthLevel->id;

                                                            $downlinesFifteenthLevel = User::where('refer', $downlineFourteenthLevel->username)->get();
                                                            foreach ($downlinesFifteenthLevel as $downlineFifteenthLevel) {
                                                                $refers[] = $downlineFifteenthLevel->id;

                                                                $downlinesSixteenthLevel = User::where('refer', $downlineFifteenthLevel->username)->get();
                                                                foreach ($downlinesSixteenthLevel as $downlineSixteenthLevel) {
                                                                    $refers[] = $downlineSixteenthLevel->id;

                                                                    $downlinesSeventeenthLevel = User::where('refer', $downlineSixteenthLevel->username)->get();
                                                                    foreach ($downlinesSeventeenthLevel as $downlineSeventeenthLevel) {
                                                                        $refers[] = $downlineSeventeenthLevel->id;

                                                                        $downlinesEighteenthLevel = User::where('refer', $downlineSeventeenthLevel->username)->get();
                                                                        foreach ($downlinesEighteenthLevel as $downlineEighteenthLevel) {
                                                                            $refers[] = $downlineEighteenthLevel->id;

                                                                            $downlinesNineteenthLevel = User::where('refer', $downlineEighteenthLevel->username)->get();
                                                                            foreach ($downlinesNineteenthLevel as $downlineNineteenthLevel) {
                                                                                $refers[] = $downlineNineteenthLevel->id;

                                                                                $downlinesTwentiethLevel = User::where('refer', $downlineNineteenthLevel->username)->get();
                                                                                foreach ($downlinesTwentiethLevel as $downlineTwentiethLevel) {
                                                                                    $refers[] = $downlineTwentiethLevel->id;

                                                                                    $downlinesTwentyFirstLevel = User::where('refer', $downlineTwentiethLevel->username)->get();
                                                                                    foreach ($downlinesTwentyFirstLevel as $downlineTwentyFirstLevel) {
                                                                                        $refers[] = $downlineTwentyFirstLevel->id;

                                                                                        $downlinesTwentySecondLevel = User::where('refer', $downlineTwentyFirstLevel->username)->get();
                                                                                        foreach ($downlinesTwentySecondLevel as $downlineTwentySecondLevel) {
                                                                                            $refers[] = $downlineTwentySecondLevel->id;

                                                                                            $downlinesTwentyThirdLevel = User::where('refer', $downlineTwentySecondLevel->username)->get();
                                                                                            foreach ($downlinesTwentyThirdLevel as $downlineTwentyThirdLevel) {
                                                                                                $refers[] = $downlineTwentyThirdLevel->id;

                                                                                                $downlinesTwentyFourthLevel = User::where('refer', $downlineTwentyThirdLevel->username)->get();
                                                                                                foreach ($downlinesTwentyFourthLevel as $downlineTwentyFourthLevel) {
                                                                                                    $refers[] = $downlineTwentyFourthLevel->id;

                                                                                                    $downlinesTwentyFifthLevel = User::where('refer', $downlineTwentyFourthLevel->username)->get();
                                                                                                    foreach ($downlinesTwentyFifthLevel as $downlineTwentyFifthLevel) {
                                                                                                        $refers[] = $downlineTwentyFifthLevel->id;

                                                                                                        $downlinesTwentySixthLevel = User::where('refer', $downlineTwentyFifthLevel->username)->get();
                                                                                                        foreach ($downlinesTwentySixthLevel as $downlineTwentySixthLevel) {
                                                                                                            $refers[] = $downlineTwentySixthLevel->id;

                                                                                                            $downlinesTwentySeventhLevel = User::where('refer', $downlineTwentySixthLevel->username)->get();
                                                                                                            foreach ($downlinesTwentySeventhLevel as $downlineTwentySeventhLevel) {
                                                                                                                $refers[] = $downlineTwentySeventhLevel->id;

                                                                                                                $downlinesTwentyEighthLevel = User::where('refer', $downlineTwentySeventhLevel->username)->get();
                                                                                                                foreach ($downlinesTwentyEighthLevel as $downlineTwentyEighthLevel) {
                                                                                                                    $refers[] = $downlineTwentyEighthLevel->id;

                                                                                                                    $downlinesTwentyNinthLevel = User::where('refer', $downlineTwentyEighthLevel->username)->get();
                                                                                                                    foreach ($downlinesTwentyNinthLevel as $downlineTwentyNinthLevel) {
                                                                                                                        $refers[] = $downlineTwentyNinthLevel->id;

                                                                                                                        $downlinesThirtyLevel = User::where('refer', $downlineTwentyNinthLevel->username)->get();
                                                                                                                        foreach ($downlinesThirtyLevel as $downlineThirtyLevel) {
                                                                                                                            $refers[] = $downlineThirtyLevel->id;

                                                                                                                            $downlinesThirtyFirstLevel = User::where('refer', $downlineThirtyLevel->username)->get();
                                                                                                                            foreach ($downlinesThirtyFirstLevel as $downlineThirtyFirstLevel) {
                                                                                                                                $refers[] = $downlineThirtyFirstLevel->id;

                                                                                                                                $downlinesThirtySecondLevel = User::where('refer', $downlineThirtyFirstLevel->username)->get();
                                                                                                                                foreach ($downlinesThirtySecondLevel as $downlineThirtySecondLevel) {
                                                                                                                                    $refers[] = $downlineThirtySecondLevel->id;

                                                                                                                                    $downlinesThirtyThirdLevel = User::where('refer', $downlineThirtySecondLevel->username)->get();
                                                                                                                                    foreach ($downlinesThirtyThirdLevel as $downlineThirtyThirdLevel) {
                                                                                                                                        $refers[] = $downline;

                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                             }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return $refers;
}
