<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        if (\DB::table('attribute_values')->count() == 0) {
            \DB::table('attribute_values')->delete();

            \DB::table('attribute_values')->insert(array(
                0 =>
                    array(
                        'id' => 1,
                        'attribute_id' => 1,
                        'values' => 'Private',
                        'created_at' => '2021-05-19 12:09:10',
                        'updated_at' => '2021-06-01 15:26:27',
                    ),
                1 =>
                    array(
                        'id' => 4,
                        'attribute_id' => 1,
                        'values' => 'Individual entrepreneur',
                        'created_at' => '2021-06-01 15:28:41',
                        'updated_at' => '2021-06-01 15:28:41',
                    ),
                2 =>
                    array(
                        'id' => 5,
                        'attribute_id' => 1,
                        'values' => 'Public',
                        'created_at' => '2021-06-01 15:28:54',
                        'updated_at' => '2021-06-01 15:28:54',
                    ),
                3 =>
                    array(
                        'id' => 6,
                        'attribute_id' => 1,
                        'values' => 'Other',
                        'created_at' => '2021-06-01 15:29:04',
                        'updated_at' => '2021-06-01 15:29:04',
                    ),
                4 =>
                    array(
                        'id' => 7,
                        'attribute_id' => 1,
                        'values' => 'State',
                        'created_at' => '2021-06-01 15:29:20',
                        'updated_at' => '2021-06-01 15:29:20',
                    ),
                5 =>
                    array(
                        'id' => 8,
                        'attribute_id' => 9,
                        'values' => 'Manufacturer',
                        'created_at' => '2021-06-01 15:30:13',
                        'updated_at' => '2021-06-01 15:30:13',
                    ),
                6 =>
                    array(
                        'id' => 9,
                        'attribute_id' => 9,
                        'values' => 'Consumer',
                        'created_at' => '2021-06-01 15:31:17',
                        'updated_at' => '2021-06-01 15:31:17',
                    ),
                7 =>
                    array(
                        'id' => 10,
                        'attribute_id' => 9,
                        'values' => 'Services',
                        'created_at' => '2021-06-01 15:31:27',
                        'updated_at' => '2021-06-01 15:31:27',
                    ),
                8 =>
                    array(
                        'id' => 11,
                        'attribute_id' => 9,
                        'values' => 'Technical support',
                        'created_at' => '2021-06-01 15:31:34',
                        'updated_at' => '2021-06-01 15:31:34',
                    ),
                9 =>
                    array(
                        'id' => 12,
                        'attribute_id' => 9,
                        'values' => 'Technical support',
                        'created_at' => '2021-06-01 15:32:27',
                        'updated_at' => '2021-06-01 15:32:27',
                    ),
                10 =>
                    array(
                        'id' => 13,
                        'attribute_id' => 9,
                        'values' => 'Nonprofit',
                        'created_at' => '2021-06-01 15:32:52',
                        'updated_at' => '2021-06-01 15:32:52',
                    ),
                11 =>
                    array(
                        'id' => 14,
                        'attribute_id' => 9,
                        'values' => 'Services',
                        'created_at' => '2021-06-01 15:32:59',
                        'updated_at' => '2021-06-01 15:32:59',
                    ),
                12 =>
                    array(
                        'id' => 15,
                        'attribute_id' => 9,
                        'values' => 'Other',
                        'created_at' => '2021-06-01 15:33:05',
                        'updated_at' => '2021-06-01 15:33:05',
                    ),
                13 =>
                    array(
                        'id' => 16,
                        'attribute_id' => 14,
                        'values' => 'Micro (<9)',
                        'created_at' => '2021-06-01 15:35:45',
                        'updated_at' => '2021-06-01 15:35:45',
                    ),
                14 =>
                    array(
                        'id' => 17,
                        'attribute_id' => 14,
                        'values' => 'Small (10 - 49)',
                        'created_at' => '2021-06-01 15:35:51',
                        'updated_at' => '2021-06-01 15:35:51',
                    ),
                15 =>
                    array(
                        'id' => 18,
                        'attribute_id' => 14,
                        'values' => 'Medium (50 - 249)',
                        'created_at' => '2021-06-01 15:35:57',
                        'updated_at' => '2021-06-01 15:35:57',
                    ),
                16 =>
                    array(
                        'id' => 19,
                        'attribute_id' => 14,
                        'values' => 'Large (249-999)',
                        'created_at' => '2021-06-01 15:36:06',
                        'updated_at' => '2021-06-01 15:36:06',
                    ),
                17 =>
                    array(
                        'id' => 20,
                        'attribute_id' => 14,
                        'values' => 'Huge (1000+)',
                        'created_at' => '2021-06-01 15:36:15',
                        'updated_at' => '2021-06-01 15:36:15',
                    ),
                18 =>
                    array(
                        'id' => 21,
                        'attribute_id' => 15,
                        'values' => 'Micro (<9.000)',
                        'created_at' => '2021-06-01 15:37:12',
                        'updated_at' => '2021-06-01 15:37:12',
                    ),
                19 =>
                    array(
                        'id' => 22,
                        'attribute_id' => 15,
                        'values' => 'Small (10 - 49.000)',
                        'created_at' => '2021-06-01 15:37:18',
                        'updated_at' => '2021-06-01 15:37:18',
                    ),
                20 =>
                    array(
                        'id' => 23,
                        'attribute_id' => 15,
                        'values' => 'Medium (50 - 249.000)',
                        'created_at' => '2021-06-01 15:37:47',
                        'updated_at' => '2021-06-01 15:37:47',
                    ),
                21 =>
                    array(
                        'id' => 24,
                        'attribute_id' => 15,
                        'values' => 'Large (249-999.000)',
                        'created_at' => '2021-06-01 15:37:52',
                        'updated_at' => '2021-06-01 15:37:52',
                    ),
                22 =>
                    array(
                        'id' => 25,
                        'attribute_id' => 15,
                        'values' => 'Huge (1.000.000+)',
                        'created_at' => '2021-06-01 15:37:58',
                        'updated_at' => '2021-06-01 15:37:58',
                    ),
                23 =>
                    array(
                        'id' => 26,
                        'attribute_id' => 17,
                        'values' => 'A',
                        'created_at' => '2021-06-01 15:38:42',
                        'updated_at' => '2021-06-01 15:38:42',
                    ),
                24 =>
                    array(
                        'id' => 27,
                        'attribute_id' => 17,
                        'values' => 'B',
                        'created_at' => '2021-06-01 15:40:06',
                        'updated_at' => '2021-06-01 15:40:06',
                    ),
                25 =>
                    array(
                        'id' => 28,
                        'attribute_id' => 17,
                        'values' => 'C',
                        'created_at' => '2021-06-01 15:40:12',
                        'updated_at' => '2021-06-01 15:40:12',
                    ),
                26 =>
                    array(
                        'id' => 29,
                        'attribute_id' => 17,
                        'values' => 'D',
                        'created_at' => '2021-06-01 15:40:18',
                        'updated_at' => '2021-06-01 15:40:18',
                    ),
                27 =>
                    array(
                        'id' => 30,
                        'attribute_id' => 17,
                        'values' => 'E',
                        'created_at' => '2021-06-01 15:40:24',
                        'updated_at' => '2021-06-01 15:40:24',
                    ),
                28 =>
                    array(
                        'id' => 31,
                        'attribute_id' => 18,
                        'values' => 'FSC',
                        'created_at' => '2021-06-01 15:40:50',
                        'updated_at' => '2021-06-01 15:40:50',
                    ),
                29 =>
                    array(
                        'id' => 32,
                        'attribute_id' => 18,
                        'values' => 'ISO (9000 or 14001)',
                        'created_at' => '2021-06-01 15:40:57',
                        'updated_at' => '2021-06-01 15:40:57',
                    ),
                30 =>
                    array(
                        'id' => 33,
                        'attribute_id' => 18,
                        'values' => 'CE',
                        'created_at' => '2021-06-01 15:41:05',
                        'updated_at' => '2021-06-01 15:41:05',
                    ),
                31 =>
                    array(
                        'id' => 34,
                        'attribute_id' => 18,
                        'values' => 'ENplus',
                        'created_at' => '2021-06-01 15:41:11',
                        'updated_at' => '2021-06-01 15:41:11',
                    ),
                32 =>
                    array(
                        'id' => 35,
                        'attribute_id' => 18,
                        'values' => 'PEFC',
                        'created_at' => '2021-06-01 15:41:22',
                        'updated_at' => '2021-06-01 15:41:22',
                    ),
                33 =>
                    array(
                        'id' => 36,
                        'attribute_id' => 18,
                        'values' => 'ISPM 15',
                        'created_at' => '2021-06-01 15:41:28',
                        'updated_at' => '2021-06-01 15:41:28',
                    ),
                34 =>
                    array(
                        'id' => 37,
                        'attribute_id' => 18,
                        'values' => 'CARB',
                        'created_at' => '2021-06-01 15:41:36',
                        'updated_at' => '2021-06-01 15:41:36',
                    ),
                35 =>
                    array(
                        'id' => 38,
                        'attribute_id' => 18,
                        'values' => 'EN+',
                        'created_at' => '2021-06-01 15:41:42',
                        'updated_at' => '2021-06-01 15:41:42',
                    ),
                36 =>
                    array(
                        'id' => 39,
                        'attribute_id' => 18,
                        'values' => 'GOST',
                        'created_at' => '2021-06-01 15:41:48',
                        'updated_at' => '2021-06-01 15:41:48',
                    ),
            ));
        }

    }
}
