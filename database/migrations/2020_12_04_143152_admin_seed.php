<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminSeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

        \DB::table('admin_role_users')->delete();
        
        \DB::table('admin_role_users')->insert(array (
            0 => 
            array (
                'created_at' => '2020-12-02 14:50:00',
                'role_id' => 1,
                'updated_at' => '2020-12-02 14:50:00',
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => '2020-12-02 16:00:22',
                'role_id' => 2,
                'updated_at' => '2020-12-02 16:00:22',
                'user_id' => 2,
            ),
        ));

        
        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'avatar' => NULL,
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Administrator',
                'password' => '$2y$10$tkLhqLri3zB17zoYR2X8i.ntaqdK5XkJz0UChCmLPvyW3ehIY2l8G',
                'remember_token' => NULL,
                'updated_at' => NULL,
                'username' => 'carzygod',
            ),
            1 => 
            array (
                'avatar' => NULL,
                'created_at' => '2020-12-04 15:10:58',
                'id' => 2,
                'name' => 'admin',
                'password' => '$2y$10$ixObU1XBlItpFONL6uokrOiSdUKyiOl7McbB./w67hUD7wB2H8reO',
                'remember_token' => NULL,
                'updated_at' => '2020-12-04 15:10:58',
                'username' => 'admin',
            ),
        ));

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     
    }
}
