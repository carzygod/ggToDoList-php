<?php

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
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => 'feather icon-bar-chart-2',
                'id' => 1,
                'order' => 1,
                'parent_id' => 0,
                'show' => 1,
                'title' => 'Index',
                'updated_at' => NULL,
                'uri' => '/',
            ),
            1 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => 'feather icon-settings',
                'id' => 2,
                'order' => 2,
                'parent_id' => 0,
                'show' => 1,
                'title' => 'Admin',
                'updated_at' => '2020-12-02 16:02:40',
                'uri' => NULL,
            ),
            2 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => '',
                'id' => 3,
                'order' => 3,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Users',
                'updated_at' => NULL,
                'uri' => 'auth/users',
            ),
            3 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => '',
                'id' => 4,
                'order' => 4,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Roles',
                'updated_at' => NULL,
                'uri' => 'auth/roles',
            ),
            4 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => '',
                'id' => 5,
                'order' => 5,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Permission',
                'updated_at' => NULL,
                'uri' => 'auth/permissions',
            ),
            5 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => '',
                'id' => 6,
                'order' => 6,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Menu',
                'updated_at' => NULL,
                'uri' => 'auth/menu',
            ),
            6 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'extension' => '',
                'icon' => '',
                'id' => 7,
                'order' => 7,
                'parent_id' => 2,
                'show' => 1,
                'title' => 'Extensions',
                'updated_at' => NULL,
                'uri' => 'auth/extensions',
            ),
            7 => 
            array (
                'created_at' => '2020-12-04 15:12:25',
                'extension' => '',
                'icon' => 'fa-address-card',
                'id' => 8,
                'order' => 8,
                'parent_id' => 0,
                'show' => 1,
                'title' => '用户系统',
                'updated_at' => '2020-12-09 12:33:45',
                'uri' => NULL,
            ),
            8 => 
            array (
                'created_at' => '2020-12-04 15:13:15',
                'extension' => '',
                'icon' => 'fa-area-chart',
                'id' => 9,
                'order' => 9,
                'parent_id' => 0,
                'show' => 1,
                'title' => '文章列表',
                'updated_at' => '2020-12-04 15:13:15',
                'uri' => '/pages',
            ),
            9 => 
            array (
                'created_at' => '2020-12-04 15:13:42',
                'extension' => '',
                'icon' => 'fa-assistive-listening-systems',
                'id' => 10,
                'order' => 10,
                'parent_id' => 0,
                'show' => 1,
                'title' => '留言列表',
                'updated_at' => '2020-12-04 15:13:42',
                'uri' => '/msg',
            ),
            10 => 
            array (
                'created_at' => '2020-12-09 12:34:28',
                'extension' => '',
                'icon' => 'fa-address-book',
                'id' => 11,
                'order' => 11,
                'parent_id' => 8,
                'show' => 1,
                'title' => '用户列表',
                'updated_at' => '2020-12-09 12:34:28',
                'uri' => '/user',
            ),
            11 => 
            array (
                'created_at' => '2020-12-09 12:36:05',
                'extension' => '',
                'icon' => 'fa-address-card-o',
                'id' => 12,
                'order' => 12,
                'parent_id' => 8,
                'show' => 1,
                'title' => '权限列表',
                'updated_at' => '2020-12-09 12:36:05',
                'uri' => '/role',
            ),
        ));
        
        
    }
}