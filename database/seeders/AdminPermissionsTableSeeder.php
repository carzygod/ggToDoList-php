<?php

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
        

        \DB::table('admin_permissions')->delete();
        
        \DB::table('admin_permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2020-12-04 15:11:57',
                'http_method' => '',
                'http_path' => '/pages*',
                'id' => 1,
                'name' => 'page',
                'order' => 1,
                'parent_id' => 0,
                'slug' => 'page',
                'updated_at' => '2020-12-04 15:17:07',
            ),
            1 => 
            array (
                'created_at' => '2020-12-04 15:15:34',
                'http_method' => '',
                'http_path' => '/user*',
                'id' => 2,
                'name' => 'user',
                'order' => 2,
                'parent_id' => 0,
                'slug' => 'user',
                'updated_at' => '2020-12-04 15:15:34',
            ),
            2 => 
            array (
                'created_at' => '2020-12-04 15:15:43',
                'http_method' => '',
                'http_path' => '/msg/*,/msg,/msg/create,/msg/*/edit',
                'id' => 3,
                'name' => 'msg',
                'order' => 3,
                'parent_id' => 0,
                'slug' => 'msg',
                'updated_at' => '2020-12-04 15:17:28',
            ),
            3 => 
            array (
                'created_at' => '2020-12-09 13:42:07',
                'http_method' => '',
                'http_path' => '/role*',
                'id' => 4,
                'name' => 'roles',
                'order' => 4,
                'parent_id' => 0,
                'slug' => 'roles',
                'updated_at' => '2020-12-09 13:42:07',
            ),
        ));
        
        
    }
}