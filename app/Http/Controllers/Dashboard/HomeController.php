<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.home.index');
    }

    public function overview()
    {
        $patientsCount = 0;
        $doctorsCount = 0;
        $adminsCount = User::query()/*->where('user_type', 1)*/ ->count();
        $hospitalsCount = User::query()/*->where('user_type',2)*/ ->count();
        $clinicsCount = User::query()/*->where('user_type',3)*/ ->count();
        $pharmaciesCount = User::query()/*->where('user_type',4)*/ ->count();
        $homeCaresCount = User::query()/*->where('user_type',5)*/ ->count();
        $labsCount = User::query()/*->where('user_type',6)*/ ->count();
        $totalTransactions = 0;
        $totalRevenues = 0;
        return view('dashboard.home.overview', compact([
            'patientsCount',
            'doctorsCount',
            'adminsCount',
            'hospitalsCount',
            'clinicsCount',
            'pharmaciesCount',
            'homeCaresCount',
            'labsCount',
            'totalTransactions',
            'totalRevenues',
        ]));
    }
}
