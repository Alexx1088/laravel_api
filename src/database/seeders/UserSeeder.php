<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		'name' => 'Maksat',
        		'email' => 'baubek.maksat@yandex.ru',
                'username' => 'baubek.maksat',
        		'password' => bcrypt('Farabi2020'),
        		'permissions' => [
        			'users-store'
        		]
        	],
            [
                'name' => 'Gulshat',
                'email' => 'gulshat@yandex.ru',
                'username' => 'gulshat.shayakhmet',
                'password' => bcrypt('secret'),
                'permissions' => [
                    'projects-store'
                ]
           ] ,
                ['name' => 'Galiya',
                    'email' => 'galiya@yandex.ru',
                    'username' => 'galiya.daukenova',
                    'password' => bcrypt('parol'),
                    'permissions' => [
                        'projects-index']
                ],
            ['name' => 'Nazira',
                'email' => 'nazira@yandex.ru',
                'username' => 'nazira.tenelbay',
                'password' => bcrypt('parol1'),
                'permissions' => [
                    'projects-index']
            ],
            ['name' => 'Aygerim',
                'email' => 'aygerim@yandex.ru',
                'username' => 'aygerim.omarova',
                'password' => bcrypt('parol2'),
                'permissions' => [
                    'projects-index']
            ],







        ];

        for ($i = 0; $i < count($users); $i++) { 
        	$user = User::updateOrCreate([
                'username' => $users[$i]['username'],
                'email' => $users[$i]['email']
            ], [
                'name' => $users[$i]['name'],
                'password' => $users[$i]['password']
            ]);

            for ($p = 0; $p < count($users[$i]['permissions']); $p++) { 
        		$permission = Permission::query()
        			->where('slug', $users[$i]['permissions'][$p])
        			->first();

                if ($permission) {
                    $user->permissions()->attach($permission);
                }
        	}
        }
    }
}
