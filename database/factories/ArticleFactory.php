<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2018/10/17
 * Time: 22:21
 */

use Faker\Generator as Faker;


$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'content' => $faker->paragraph(10),
    ];
});