<?php

use Illuminate\Database\Seeder;
use App\User;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Petuscao',
            'email' => 'teste@teste',
            'password' => bcrypt('teste@teste'),

        ]);
    }
}
