<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Quest;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $quests = Quest::inRandomOrder()->limit(10)->get();

        // $clearCounts = $quests->mapWithKeys(function($quest) {
        //     return [$quest->id => $quest->clearCount()];
        // });
        //     view()->share('quests', $quests);




            view()->composer('*', function ($view) {
                $quests = Quest::inRandomOrder()->limit(10)->get();
                $clearCounts = $quests->mapWithKeys(function($quest) {
                    return [$quest->id => $quest->clearCount()];
                });
                $totalClearCount = Quest::totalClearCount();
    
                // 複数の変数をビューに渡す
                $view->with([
                    'quests' => $quests,
                    'clearCounts' => $clearCounts,
                    'totalClearCount' => $totalClearCount,
                ]);
            });
    }
}
