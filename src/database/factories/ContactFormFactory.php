<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactForm;
use Faker\Generator as Faker;

$factory->define(ContactForm::class, function (Faker $faker) {
    return [
        //
        'shop_name' => $faker->name,
        'category' => $faker->realText(10),
        'address' => $faker->address,
        'shop_url' => $faker->url,
        'contact' => $faker->realText(200),
    ];
});
