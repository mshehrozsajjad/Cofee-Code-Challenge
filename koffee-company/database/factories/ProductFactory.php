<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
        'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
