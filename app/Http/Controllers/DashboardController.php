<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $dbOk = false;
        try {
            DB::connection()->getPdo();
            $dbOk = true;
        } catch (\Exception $e) {
        }

        return view('dashboard', [
            'appName' => config('app.name'),
            'appEnv' => config('app.env'),
            'phpVersion' => PHP_VERSION,
            'laravelVersion' => app()->version(),
            'dbOk' => $dbOk,
        ]);
    }
}
