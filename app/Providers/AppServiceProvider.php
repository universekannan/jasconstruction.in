<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    public $userStatu;

    public function boot()
    {
        view()->composer('admin/layouts.sidebar', function ($view) {

            $this->userStatu = DB::table('user_types')
                                ->where('status', 1)
                                ->orderBy('id')
                                ->get();


            $view->with([
                'userStatu'    => $this->userStatu
            ]);
        });
    }
}