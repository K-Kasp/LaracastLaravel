<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        if (\DB::table('attributes')->count() == 0) {
            \DB::table('attributes')->delete();

            \DB::table('attributes')->insert(array(
                0 =>
                    array(
                        'id' => 1,
                        'name' => 'Company Size',
                        'created_at' => '2021-05-19 12:09:01',
                        'updated_at' => '2021-06-01 15:29:26',
                        'type' => 'dropdown',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                1 =>
                    array(
                        'id' => 9,
                        'name' => 'Activity type',
                        'created_at' => '2021-06-01 15:29:55',
                        'updated_at' => '2021-06-01 15:29:55',
                        'type' => 'checkbox',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                2 =>
                    array(
                        'id' => 10,
                        'name' => 'Creation date',
                        'created_at' => '2021-06-01 15:34:05',
                        'updated_at' => '2021-06-01 15:34:05',
                        'type' => 'number',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                3 =>
                    array(
                        'id' => 11,
                        'name' => 'Country',
                        'created_at' => '2021-06-01 15:34:34',
                        'updated_at' => '2021-06-01 15:34:34',
                        'type' => 'country',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                4 =>
                    array(
                        'id' => 12,
                        'name' => 'Country',
                        'created_at' => '2021-06-01 15:34:35',
                        'updated_at' => '2021-06-01 15:34:48',
                        'type' => 'country',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                5 =>
                    array(
                        'id' => 14,
                        'name' => 'Number Of Employees',
                        'created_at' => '2021-06-01 15:35:10',
                        'updated_at' => '2021-06-01 15:35:10',
                        'type' => 'dropdown',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                6 =>
                    array(
                        'id' => 15,
                        'name' => 'Capacity (Manufacturing, consumption, purchasing, trade ):',
                        'created_at' => '2021-06-01 15:36:32',
                        'updated_at' => '2021-06-01 15:36:32',
                        'type' => 'dropdown',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                7 =>
                    array(
                        'id' => 16,
                        'name' => 'Turnover',
                        'created_at' => '2021-06-01 15:36:55',
                        'updated_at' => '2021-06-01 15:36:55',
                        'type' => 'number',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                8 =>
                    array(
                        'id' => 17,
                        'name' => 'Credit Rating',
                        'created_at' => '2021-06-01 15:38:21',
                        'updated_at' => '2021-06-01 15:38:21',
                        'type' => 'dropdown',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
                9 =>
                    array(
                        'id' => 18,
                        'name' => 'Certification',
                        'created_at' => '2021-06-01 15:40:39',
                        'updated_at' => '2021-06-01 15:40:39',
                        'type' => 'checkbox',
                        'content_type' => 'App\\Seller',
                        'filterable' => 1,
                    ),
            ));


        }
    }
}
