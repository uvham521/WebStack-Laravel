<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminExtensionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_extensions')->truncate();

        \DB::table('admin_extensions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'ghost.dcat-config',
                'version' => '1.0.1',
                'is_enabled' => 1,
                'options' => null,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'lake.login-captcha',
                'version' => '1.0.8',
                'is_enabled' => 1,
                'options' => null,
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
        ));


    }
}
