<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Television;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Television::class, function (Faker $faker) {
  return [
    'name' => $faker -> word(),
    'model' => $faker -> sentence($nbWords = 3, $variableNbWords = false),
    'brand' => $faker -> word(),
    'description' => $faker -> text(),
    'price' => $faker ->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000)
  ];
});
