<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\Badges;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index()
    {
        $badges =  Badges::all();
        dd($badges);
        $navigator = [
            [
                'name' => 'leaderboard',
                'link' => 'coach.leaderboard',
            ],
        ];

        return view('coach.pages.generals.leaderboard.index', [
            'navigator' => $navigator,
        ]);
    }

    public function error_page()
    {
        return view('erorr_page');
    }
    //
}
