<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_permissions')->truncate();

        \DB::table('admin_permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Auth management',
                'slug' => 'auth-management',
                'http_method' => '',
                'http_path' => '',
                'order' => 1,
                'parent_id' => 0,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Users',
                'slug' => 'users',
                'http_method' => '',
                'http_path' => '/auth/users*',
                'order' => 2,
                'parent_id' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Roles',
                'slug' => 'roles',
                'http_method' => '',
                'http_path' => '/auth/roles*',
                'order' => 3,
                'parent_id' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Permissions',
                'slug' => 'permissions',
                'http_method' => '',
                'http_path' => '/auth/permissions*',
                'order' => 4,
                'parent_id' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Menu',
                'slug' => 'menu',
                'http_method' => '',
                'http_path' => '/auth/menu*',
                'order' => 5,
                'parent_id' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Extension',
                'slug' => 'extension',
                'http_method' => '',
                'http_path' => '/auth/extensions*',
                'order' => 6,
                'parent_id' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
        ));


    }
}
