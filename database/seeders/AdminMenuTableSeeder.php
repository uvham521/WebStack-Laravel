<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_menu')->truncate();

        \DB::table('admin_menu')->insert(array (
            0 =>
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            1 =>
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'feather icon-settings',
                'uri' => '',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            2 =>
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => '',
                'uri' => 'auth/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            3 =>
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => '',
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            4 =>
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => '',
                'uri' => 'auth/permissions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            5 =>
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => '',
                'uri' => 'auth/menu',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            6 =>
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Extensions',
                'icon' => '',
                'uri' => 'auth/extensions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            7 =>
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 10,
                'title' => '站点配置',
                'icon' => 'fa-connectdevelop',
                'uri' => 'config',
                'extension' => 'ghost.dcat-config',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            8 =>
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 8,
                'title' => '分类管理',
                'icon' => 'fa-archive',
                'uri' => 'categories',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            9 =>
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 9,
                'title' => '网站管理',
                'icon' => 'fa-edge',
                'uri' => 'sites',
                'extension' => '',
                'show' => 1,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
        ));


    }
}
