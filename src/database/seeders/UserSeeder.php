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
        	]
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
