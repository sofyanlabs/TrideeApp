<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Reply;
use Faker\Generator as Faker;
use App\Model\Status;
use App\User;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'status_id' => function(){
            return Status::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
