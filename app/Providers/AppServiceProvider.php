<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    public function boot()
    {
        Model::unguard();

        Validator::extend('exist', function ($attribute, $value, $parameters, $validator) {
            $table = $parameters[0];
            $query = DB::table($table);
            foreach ($parameters as $key => $pram) {
                if ($key < 1) continue;
                $pram = trim($pram);
                if ($key == 1)
                    $query->where($pram, $value);
                else
                    $query->orWhere($pram, $value);
            }
            return $query->exists();
        });
    }
}
