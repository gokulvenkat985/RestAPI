
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\product;
use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
        	return product::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)
    ];
});
