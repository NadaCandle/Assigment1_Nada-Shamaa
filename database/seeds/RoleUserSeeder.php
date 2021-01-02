<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++){
            \Illuminate\Support\Facades\DB::table('Role_user')->insert([
               'user_id' => \App\User::all()->random()->id,
               'role_id' => \App\Role::all()->random()->id,
            ]);
    }
}
}