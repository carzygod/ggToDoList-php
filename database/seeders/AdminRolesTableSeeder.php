<?php

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'slug' => 'administrator',
                'created_at' => '2020-12-02 14:50:00',
                'updated_at' => '2020-12-02 14:50:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'slug' => 'user',
                'created_at' => '2020-12-02 15:59:54',
                'updated_at' => '2020-12-04 15:10:07',
            ),
        ));
        
        
    }
}