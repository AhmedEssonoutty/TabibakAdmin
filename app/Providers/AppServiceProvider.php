<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $modelFiles = Storage::disk('app')->files('Models');
        foreach ($modelFiles as $modelFile) {
            $model = str_replace('.php', '', $modelFile);
            $model = str_replace('Models/', '', $model);
            $modelClass = 'App\\Models\\' . str_replace('/', '\\', $model);
            Relation::enforceMorphMap([
                "$model" => "$modelClass"
            ]);
        }
        Model::preventLazyLoading(!$this->app->isProduction());
    }
}
