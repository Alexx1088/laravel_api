<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'slug' => 'administrator',
                'name' => 'Администратор'
            ], [
                'slug' => 'corrector',
                'name' => 'Корректор'
            ], [
                'slug' => 'expert',
                'name' => 'Эксперт'
            ], [
                'slug' => 'interpreter',
                'name' => 'Переводчик'
            ], [
                'slug' => 'coordinator',
                'name' => 'Координатор'
            ],
        ];

        for ($i = 0; $i < count($roles); $i++) {
            Role::updateOrCreate([
                'slug' => $roles[$i]['slug']
            ], [
                'name' => $roles[$i]['name']
            ]);
        }

    }
}
