<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Landscapes',
                'slug' => 'landscapes',
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
            ),
            1 => 
            array (
                'id' => 4,
                'parent_id' => 3,
                'order' => 2,
                'name' => 'Portrait',
                'slug' => 'portrait',
                'created_at' => '2020-03-07 15:11:36',
                'updated_at' => '2020-03-07 15:11:36',
            ),
            2 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'order' => 4,
                'name' => 'Fine Art',
                'slug' => 'fine art',
                'created_at' => '2020-03-14 10:02:06',
                'updated_at' => '2020-03-14 10:02:06',
            ),
            3 => 
            array (
                'id' => 6,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Cosmetics',
                'slug' => 'cosmetics',
                'created_at' => '2020-03-14 10:02:28',
                'updated_at' => '2020-03-14 10:02:41',
            ),
            4 => 
            array (
                'id' => 7,
                'parent_id' => 6,
                'order' => 1,
                'name' => 'Events',
                'slug' => 'events',
                'created_at' => '2020-03-14 10:03:54',
                'updated_at' => '2020-03-14 10:03:54',
            ),
            5 => 
            array (
                'id' => 8,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Food',
                'slug' => 'food',
                'created_at' => '2020-03-14 11:52:14',
                'updated_at' => '2020-03-14 11:52:14',
            ),
            6 => 
            array (
                'id' => 9,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Travel',
                'slug' => 'travel',
                'created_at' => '2020-03-14 11:55:14',
                'updated_at' => '2020-03-14 11:55:14',
            ),
            7 => 
            array (
                'id' => 10,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Wedding',
                'slug' => 'wedding',
                'created_at' => '2020-03-14 11:58:14',
                'updated_at' => '2020-03-14 11:58:14',
            ),
            8 => 
            array (
                'id' => 11,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Street',
                'slug' => 'street',
                'created_at' => '2020-03-14 11:59:14',
                'updated_at' => '2020-03-14 11:59:14',
            ),
            9 => 
            array (
                'id' => 12,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Documentary',
                'slug' => 'documentary',
                'created_at' => '2020-03-14 12:01:14',
                'updated_at' => '2020-03-14 12:01:14',
            ),
            10 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Architecture',
                'slug' => 'architecture',
                'created_at' => '2020-03-14 12:03:14',
                'updated_at' => '2020-03-14 12:03:14',
            ),
        ));
        
        
    }
}