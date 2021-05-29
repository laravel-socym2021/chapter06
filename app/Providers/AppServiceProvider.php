<?php

namespace App\Providers;

use App\Foundation\ViewComposer\PolicyComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Factory $factory)
    {
        // リスト6.5.3.4：View Composerの登録例
        /*
        $factory->composer(
            'PolicyComposerを利用したいテンプレート名',
            PolicyComposer::class
        );
        */
    }
}
