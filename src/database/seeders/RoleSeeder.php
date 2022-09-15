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
                'slug' => 'admin',
                'name' => 'Admin'
            ], [
                'slug' => 'корректор',
                'name' => 'Корректор'
            ],
            ['slug' => 'эксперт',
                'name' => 'Эксперт'
            ],
            ['slug' => 'переводчик',
                'name' => 'Переводчик'
            ],
            ['slug' => 'координатор',
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
