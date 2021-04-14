<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_settings')->truncate();

        \DB::table('admin_settings')->insert(array (
            0 =>
            array (
                'slug' => 'ghost::admin_config',
                'value' => '[{"key":"base.admin_name","name":"\u7ad9\u957f\u59d3\u540d","value":"hui-ho","help":null,"element":"text","options":{"option":[],"rule":[]},"order":1},{"key":"base.admin_email","name":"\u7ad9\u957f\u90ae\u7bb1","value":"hui-ho@outlook.com","help":null,"element":"text","options":{"option":[],"rule":[]},"order":2},{"key":"base.icp_record","name":"ICP\u5907\u6848\u53f7","value":"\u7ca4ICP\u5907XXXXXXXXXXXXX\u53f7","help":null,"element":"text","options":{"option":[],"rule":[]},"order":3}]',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
            1 =>
            array (
                'slug' => 'ghost:dcat-config',
                'value' => '{"tab":[{"key":"base","value":"\u57fa\u672c\u914d\u7f6e"}]}',
                'created_at' => '2021-04-14 12:25:07',
                'updated_at' => '2021-04-14 12:25:07',
            ),
        ));


    }
}
