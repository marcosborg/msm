<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'header_link_create',
            ],
            [
                'id'    => 23,
                'title' => 'header_link_edit',
            ],
            [
                'id'    => 24,
                'title' => 'header_link_show',
            ],
            [
                'id'    => 25,
                'title' => 'header_link_delete',
            ],
            [
                'id'    => 26,
                'title' => 'header_link_access',
            ],
            [
                'id'    => 27,
                'title' => 'about_create',
            ],
            [
                'id'    => 28,
                'title' => 'about_edit',
            ],
            [
                'id'    => 29,
                'title' => 'about_show',
            ],
            [
                'id'    => 30,
                'title' => 'about_delete',
            ],
            [
                'id'    => 31,
                'title' => 'about_access',
            ],
            [
                'id'    => 32,
                'title' => 'link_create',
            ],
            [
                'id'    => 33,
                'title' => 'link_edit',
            ],
            [
                'id'    => 34,
                'title' => 'link_show',
            ],
            [
                'id'    => 35,
                'title' => 'link_delete',
            ],
            [
                'id'    => 36,
                'title' => 'link_access',
            ],
            [
                'id'    => 37,
                'title' => 'partner_create',
            ],
            [
                'id'    => 38,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 39,
                'title' => 'partner_show',
            ],
            [
                'id'    => 40,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 41,
                'title' => 'partner_access',
            ],
            [
                'id'    => 42,
                'title' => 'menu_create',
            ],
            [
                'id'    => 43,
                'title' => 'menu_edit',
            ],
            [
                'id'    => 44,
                'title' => 'menu_show',
            ],
            [
                'id'    => 45,
                'title' => 'menu_delete',
            ],
            [
                'id'    => 46,
                'title' => 'menu_access',
            ],
            [
                'id'    => 47,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
