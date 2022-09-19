<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'slug' => 'users-store',
                'name' => 'Users store'
            ], [
                'slug' => 'users-update',
                'name' => 'Users update'
            ], [
                'slug' => 'users-destroy',
                'name' => 'Users destroy'
            ], [
                'slug' => 'users-index',
                'name' => 'Users index'
            ], [
                'slug' => 'users-show',
                'name' => 'Users show'
            ], [
                'slug' => 'posts-store',
                'name' => 'Posts store'
            ], [
                'slug' => 'posts-update',
                'name' => 'Posts update'
            ], [
                'slug' => 'posts-destroy',
                'name' => 'Posts destroy'
            ], [
                'slug' => 'posts-index',
                'name' => 'Posts index'
            ], [
                'slug' => 'posts-show',
                'name' => 'Posts show'
            ], [
                'slug' => 'projects-store',
                'name' => 'Projects store'
            ], [
                'slug' => 'projects-update',
                'name' => 'Projects update'
            ], [
                'slug' => 'projects-destroy',
                'name' => 'Projects destroy'
            ], [
                'slug' => 'projects-index',
                'name' => 'Projects index'
            ], [
                'slug' => 'projects-show',
                'name' => 'Projects show'
            ],
        ];

        for ($i = 0; $i < count($permissions); $i++) {
            Permission::updateOrCreate([
                'slug' => $permissions[$i]['slug']
            ], [
                'name' => $permissions[$i]['name']
            ]);
        }
    }
}
