<?php

use Illuminate\Database\Seeder;

class AdminRolePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_permissions')->delete();
        
        \DB::table('admin_role_permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2020-12-04 15:14:26',
                'permission_id' => 1,
                'role_id' => 2,
                'updated_at' => '2020-12-04 15:14:26',
            ),
            1 => 
            array (
                'created_at' => '2020-12-04 15:15:52',
                'permission_id' => 2,
                'role_id' => 2,
                'updated_at' => '2020-12-04 15:15:52',
            ),
            2 => 
            array (
                'created_at' => '2020-12-04 15:15:52',
                'permission_id' => 3,
                'role_id' => 2,
                'updated_at' => '2020-12-04 15:15:52',
            ),
            3 => 
            array (
                'created_at' => '2020-12-09 13:42:29',
                'permission_id' => 4,
                'role_id' => 2,
                'updated_at' => '2020-12-09 13:42:29',
            ),
        ));
        
        
    }
}