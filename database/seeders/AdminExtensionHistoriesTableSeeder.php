<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminExtensionHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_extension_histories')->truncate();

        \DB::table('admin_extension_histories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'ghost.dcat-config',
                'type' => 1,
                'version' => '1.0.0',
                'detail' => 'Initialize extension.',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'ghost.dcat-config',
                'type' => 1,
                'version' => '1.0.1',
                'detail' => '优化显示页面',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'lake.login-captcha',
                'type' => 1,
                'version' => '1.0.6',
                'detail' => '优化验证码页面显示。优化dcat新版验证码不显示问题。',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'lake.login-captcha',
                'type' => 1,
                'version' => '1.0.7',
                'detail' => '添加数学公式验证码。',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'lake.login-captcha',
                'type' => 1,
                'version' => '1.0.8',
                'detail' => '修复验证码类型翻译丢失问题。',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
        ));


    }
}
