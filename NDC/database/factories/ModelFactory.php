<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
		'id' => $faker->numberBetween($min = 10000, $max = 10000000),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
		DB::table('model_has_roles')->insert([
            'role_id' => $faker->numberBetween(1,6),
			'model_id' => $faker->numberBetween($min = 10000, $max = 10000000),
			'model_type' => 'App\User',
        ]);	
});

$factory->define(App\Reservationaud::class, function (Faker\Generator $faker) {

    return [
		'f_prestamo' => $faker->date(),
		'hinicio_solic' => $faker->word(6),
		'hfin_solic' => $faker->word(6),
		'act_solic' => $faker->numberBetween(1,4),
		'jornada_solic' => $faker->numberBetween(1,2),
		'ubicacion_solic' => $faker->numberBetween(1,4),
		'estado_solic' => 1,
		'observ_solic' => $faker->realText(random_int(20, 160)),
		'requeri_solic' => 'Audiovisual',
		'user_id' => 1032473426,
    ];
});

$factory->define(App\Reservationlab::class, function (Faker\Generator $faker) {

    return [
		'f_prestamo' => $faker->date(),
		'hinicio_solic' => $faker->word(6),
		'hfin_solic' => $faker->word(6),
		'act_solic' => $faker->numberBetween(1,4),
		'jornada_solic' => $faker->numberBetween(1,2),
		'ubicacion_solic' => $faker->numberBetween(1,4),
		'estado_solic' => 1,
		'observ_solic' => $faker->realText(random_int(20, 160)),
		'requeri_solic' => 'SWITCH',
		'user_id' => 1032473426,
    ];
});

$factory->define(App\Prestamos::class, function (Faker\Generator $faker) {

    return [
		'doc_user_prestamo' => 1032473426,
		'estado' => 1,
		'sede' => $faker->numberBetween(1,15),
		'observaciones' => $faker->realText(random_int(20, 160)),
		'carne' => $faker->numberBetween(1,4),
		'registra_prestamo' => 1032473426,
		'finaliza_prestamo' => null,
    ];
});

$factory->define(App\Requestinfra::class, function (Faker\Generator $faker) {

    return [
		'date_cierre' => $faker->date(),
		'id_user' => 1032473426,
		'description' => $faker->realText(random_int(20, 160)),
		'espacio' => 1,
		'estado' => 1,
    ];
});



